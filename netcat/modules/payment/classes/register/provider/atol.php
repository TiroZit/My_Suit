<?php

/**
 * Класс для интеграции с сервисом онлайн-касс Атол.онлайн
 */
class nc_payment_register_provider_atol extends nc_payment_register_provider {

    const API_URL = 'https://online.atol.ru/possystem/v4/';

    static protected $settings = array(
        'PaymentRegisterAtolLogin' => NETCAT_MODULE_PAYMENT_REGISTER_ATOL_LOGIN,
        'PaymentRegisterAtolPassword' => NETCAT_MODULE_PAYMENT_REGISTER_ATOL_PASSWORD,
        'PaymentRegisterAtolGroup' => NETCAT_MODULE_PAYMENT_REGISTER_ATOL_GROUP,
        'PaymentRegisterAtolPaymentAddress' => NETCAT_MODULE_PAYMENT_REGISTER_ATOL_PAYMENT_ADDRESS,
    );

    static protected $atol_vat_enum = array(
        '' => 'none',
        0 => 'vat0',
        10 => 'vat10',
        20 => 'vat20',
    );

    static protected $atol_default_vat = 'vat20';

    static protected $atol_payment_object_enum = array(
        nc_payment_invoice_item::TYPE_COMMODITY => 'commodity',
        nc_payment_invoice_item::TYPE_EXCISED_COMMODITY => 'excise',
        nc_payment_invoice_item::TYPE_JOB => 'job',
        nc_payment_invoice_item::TYPE_SERVICE => 'service',
        nc_payment_invoice_item::TYPE_INTELLECTUAL_ACTIVITY => 'intellectual_activity',
        nc_payment_invoice_item::TYPE_PAYMENT => 'payment',
        nc_payment_invoice_item::TYPE_COMPOSITE => 'composite',
        nc_payment_invoice_item::TYPE_OTHER => 'another',
    );

    private $token;

    /**
     * @param $site_id
     * @param $provider_id
     */
    public function __construct($site_id = null, $provider_id = null) {
        parent::__construct($site_id, $provider_id);
        // в конструкторе получаем токен, т.к. впоследствии он необходим для всех запросов
        $this->get_token();
        // @todo убрать после 01.01.2019:
        if (date('Y') < 2019) {
            self::$atol_vat_enum = array('' => 'none', 0 => 'vat0', 10 => 'vat10', 18 => 'vat18');
            self::$atol_default_vat = 'vat18';
        }
    }

    /**
     * Получение токена
     */
    protected function get_token() {
        $token = $this->execute_request('getToken', array(
            'login' => $this->get_setting('PaymentRegisterAtolLogin'),
            'pass' => $this->get_setting('PaymentRegisterAtolPassword'),
        ));
        $this->token = $token['token'];
    }

    /**
     * Обработка нового чека
     *
     * @param nc_payment_receipt $receipt
     */
    public function process_receipt(nc_payment_receipt $receipt) {
        $nc_core = nc_core::get_object();
        $invoice = $receipt->get_invoice();

        $domain = $nc_core->catalogue->get_current('Domain');
        $site_id = $nc_core->catalogue->get_current('Catalogue_ID');
        $payment_address = $this->get_setting('PaymentRegisterAtolPaymentAddress');
        $company_email = $this->get_setting('PaymentRegisterEmail')
            ?: $this->get_setting('PaymentRegisterWarningsEmail')
            ?: $nc_core->get_settings('SpamFromEmail')
            ?: 'noreply@' . $nc_core->catalogue->get_current('Domain');

        $receipt_id = (string)$receipt->get_id();
        $callback_url = $nc_core->catalogue->get_url_by_id($site_id) .
                        nc_module_path('payment') .
                        'register/callback.php?receipt_id=' . $receipt_id;

        $items = $receipt->get_items();
        $totals = (float)$items->sum('total_price');

        $data = array(
            'timestamp' => date("d.m.Y H:i:s"),
            'external_id' => $receipt_id,
            'service' => array(
                'callback_url' => $callback_url,
            ),
            'receipt' => array(
                'company' => array(
                    'sno' => $this->get_setting('PaymentRegisterSN'),
                    'inn' => $this->get_setting('PaymentRegisterINN'),
                    'email' => $company_email,
                    'payment_address' => $payment_address ? $payment_address : $domain,
                ),
                'client' => array(),
                'items' => array(),
                'total' => $totals,
                'payments' => array(
                    array(
                        'type' => 1,
                        'sum' => $totals
                    )
                )
            )
        );

        $phone = nc_normalize_phone_number($invoice->get('customer_phone'));
        if ($phone) {
            $data['receipt']['client']['phone'] = $phone;
        }

        // Максимальная длина строки – 64 символа
        $email = nc_substr($invoice->get('customer_email'), 0, 64);
        if ($email || !$phone) {
            // В запросе обязательно должно присутствовать одно из полей: email или phone
            if (!$email) {
                $email = nc_payment_register::get_default_customer_email();
            }
            $data['receipt']['client']['email'] = $email;
        }

        // Список товаров
        /** @var nc_payment_invoice_item $item */
        foreach ($items as $item) {
            $data['receipt']['items'][] = array(
                'name' => nc_substr($item->get('name'), 0, 128), // Максимальная длина строки – 128 символов
                'price' => (float)$item->get('item_price'),
                'quantity' => (float)$item->get('qty'),
                'sum' => (float)$item->get('total_price'),
                'vat' => array(
                    'type' => nc_array_value(self::$atol_vat_enum, $item->get('vat_rate'), self::$atol_default_vat),
                ),
                'payment_method' => 'full_prepayment',
                'payment_object' => nc_array_value(self::$atol_payment_object_enum, $item->get('type'), nc_payment_invoice_item::TYPE_COMMODITY),
            );
        }
        $operation = $receipt->get('operation') === 'sell' ? 'sell' : 'sell_refund';
        $path = $this->get_setting('PaymentRegisterAtolGroup') . '/' . $operation;
        $response = $this->execute_request($path, $data);

        $receipt->set('transaction_id', nc_array_value($response, 'uuid'));
        $receipt->save_status(
            (!empty($response['error'])) ? $receipt::STATUS_FAILED : $receipt::STATUS_PENDING,
            array(
                'path' => $path,
                'data' => $data,
                'response' => $response,
            )
        );
    }

    /**
     * Обработка колбека от кассового сервиса
     */
    public function process_callback() {
        $receipt_id = nc_core::get_object()->input->fetch_get('receipt_id');
        $receipt = new nc_payment_receipt($receipt_id);
        $this->request_report($receipt);
    }

    /**
     * Запрос статуса чека
     *
     * @param nc_payment_receipt $receipt
     */
    protected function request_report(nc_payment_receipt $receipt) {
        $receipt_uuid = $receipt->get('transaction_id');
        if (!$receipt_uuid) {
            trigger_error(__METHOD__ . ": receipt with id={$receipt->get_id()}) has no 'transaction_id'", E_USER_WARNING);
            return;
        }

        $path = $this->get_setting('PaymentRegisterAtolGroup') . '/report/' . $receipt_uuid;
        $response = $this->execute_request($path);

        $status = nc_array_value($response, 'status');

        if (!$response || !empty($response['error']) || $status === 'fail' || !empty($response['connection_error'])) {
            $receipt->save_status(
                !empty($response['connection_error']) ? $receipt::STATUS_CONNECTION_ERROR : $receipt::STATUS_FAILED,
                array(
                    'path' => $path,
                    'response' => $response,
                )
            );
        } else if ($status === 'done' && !empty($response['payload'])) {
            $payload = $response['payload'];
            $receipt_datetime = DateTime::createFromFormat('d.m.Y H:i:s', $payload['receipt_datetime']);
            $receipt->set_values(array(
                'fiscal_receipt_created' => $receipt_datetime->format("Y-m-d H:i:s"),
                'fiscal_receipt_number' => $payload['fiscal_receipt_number'],
                'shift_number' => $payload['shift_number'],
                'fiscal_storage_number' => $payload['fn_number'],
                'register_registration_number' => $payload['ecr_registration_number'],
                'fiscal_document_number' => $payload['fiscal_document_number'],
                'fiscal_document_attribute' => $payload['fiscal_document_attribute'],
            ));

            $receipt->save_status(
                $receipt::STATUS_REGISTERED,
                array(
                    'path' => $path,
                    'response' => $response,
                )
            );
        } else if ($status === 'wait') {
            // Z-z-z...
        }
    }

    /**
     * Функция для создания CURL-запроса
     *
     * @param $path
     * @param null|array $data
     * @return array
     */
    protected function execute_request($path, array $data = null) {
        $ch = curl_init(self::API_URL . $path);
        $headers = array();
        if ($this->token) {
            $headers[] = 'Token: ' . $this->token;
        }
        if ($data) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, nc_array_json($data));
            $headers[] = 'Content-Type: application/json; charset=utf-8';
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1); // тикет 262444
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        curl_close($ch);
        if ($response) {
            $result = json_decode($response, true);
            if (!json_last_error()) {
                return $result;
            } else {
                return array('error' => array('text' => 'JSON error: ' . json_last_error_msg()), 'response' => $response);
            }
        } else if ($curl_error) {
            return array('error' => array('text' => $curl_error), 'connection_error' => true);
        } else {
            return array('(empty response)');
        }
    }

    /**
     * Выполнение задач при периодическом запуске скрипта из планировщика:
     * запрос статуса по чекам, по которым не получен ответ (АТОЛ может не вызвать
     * callback, если чек содержал ошибку)
     */
    public function execute_cron_tasks() {
        $pending_receipts_query =
            "SELECT * 
               FROM `Payment_Receipt` 
              WHERE `RegisterProvider_Type` = '" . nc_payment_receipt::PROVIDER_TYPE_REGISTER . "'
                AND `RegisterProvider_ID` = '" . $this->get_id() . "'
                AND `Status` = '" . nc_payment_receipt::STATUS_PENDING . "'";

        $receipts = nc_payment_receipt_collection::load_records($pending_receipts_query);
        foreach ($receipts as $receipt) {
            $this->request_report($receipt);
        }
    }

}