<?php

class nc_payment_system_yookassa extends nc_payment_system {

    protected $automatic = true;

    // принимаемые валюты
    protected $accepted_currencies = array('RUB', 'RUR', 'USD', 'EUR', 'BYN', 'KZT', 'CNY');

    // сопоставление кодов валют
    protected $currency_map = array(
        'RUR' => 'RUB',
    );

    // параметры сайта в платёжной системе
    protected $settings = array(
        'shop_id' => null,
        'secret_key' => null,
        'return_url' => null,
        'hold' => false,
        'send_receipts' => false,
        'tax_system_code' => 1,
    );

    // передаваемые параметры
    protected $request_parameters = array(
    );

    // коды ставок НДС, используемые в чеках
    static protected $yookassa_vat_enum = array(
        '' => '1',
        0 => '2',
        10 => '3',
        20 => '4',
    );
    static protected $yookassa_default_vat = 4;

    static protected $yookassa_payment_subject_enum = array(
        nc_payment_invoice_item::TYPE_COMMODITY => 'commodity',
        nc_payment_invoice_item::TYPE_EXCISED_COMMODITY => 'excise',
        nc_payment_invoice_item::TYPE_JOB => 'job',
        nc_payment_invoice_item::TYPE_SERVICE => 'service',
        nc_payment_invoice_item::TYPE_INTELLECTUAL_ACTIVITY => 'intellectual_activity',
        nc_payment_invoice_item::TYPE_PAYMENT => 'payment',
        nc_payment_invoice_item::TYPE_COMPOSITE => 'composite',
        nc_payment_invoice_item::TYPE_OTHER => 'another',
    );

    /**
     * Создание запроса на оплату и переадресация на сайт ЮKassa.
     */
    public function execute_payment_request(nc_payment_invoice $invoice) {
        $payment_data = array(
            'amount' => array(
                'value' => $invoice->get_amount('%0.2F'),
                'currency' => $this->get_currency_code($invoice->get_currency()),
            ),
            'confirmation' => array(
                'type' => 'redirect',
                'return_url' => $this->get_return_url($invoice),
            ),
            'capture' => !$this->get_setting('hold'),
            'description' => $invoice->get_description(),
            'metadata' => array(
                'invoice_id' => $invoice->get_id(),
                'signature' => $this->get_invoice_signature($invoice),
            ),
        );

        $receipt_data = $this->create_sell_receipt($invoice);
        if ($receipt_data) {
            $payment_data['receipt'] = $receipt_data;
        }

        $response = $this->create_payment($payment_data);
        $invoice->set('last_response', json_encode($response))->save();

        if (isset($response['confirmation']['confirmation_url'])) {
            ob_end_clean();
            nc_set_http_response_code(302);
            header('Location: ' . $response['confirmation']['confirmation_url'], true, 302);
        } else {
            $this->add_error(nc_array_value($response, 'error', 'Unable to get confirmation_url'));
            echo NETCAT_MODULE_PAYMENT_YOO_KASSA_ERROR_CREATING_PAYMENT;
        }
    }

    /**
     * Создаёт оплату в ЮKassa
     * @param $payment_data
     * @return array
     */
    protected function create_payment($payment_data) {
        $nc_core = nc_core::get_object();
        if (!$nc_core->NC_UNICODE) {
            $payment_data = $nc_core->utf8->array_win2utf($payment_data);
        }

        $json_data = json_encode($payment_data, 256); // JSON_UNESCAPED_UNICODE = 256 (PHP 5.4+)

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.yookassa.ru/v3/payments');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $this->get_setting('shop_id') . ':' . $this->get_setting('secret_key'));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Idempotence-Key: ' . uniqid('', true),
            'Content-Type: application/json',
        ));

        $raw_result = curl_exec($ch);

        if ($raw_result === false) {
            $error = curl_error($ch);
            $result = array('error' => $error);
        } else {
            $result = json_decode($raw_result, true);
            if (!is_array($result) || json_last_error() !== JSON_ERROR_NONE) {
                $result = array('error' => 'JSON error', 'server_response' => $raw_result);
            }
        }

        curl_close($ch);
        return $result;
    }

    /**
     * Проверяет наличие обязательных параметров для выполнения запроса на оплату
     */
    public function validate_payment_request_parameters() {
        if (!$this->get_setting('shop_id')) {
            $this->add_error(NETCAT_MODULE_PAYMENT_YOO_KASSA_ERROR_SHOP_ID_IS_NOT_VALID);
        }

        if (!$this->get_setting('secret_key')) {
            $this->add_error(NETCAT_MODULE_PAYMENT_YOO_KASSA_ERROR_SECRET_KEY_IS_NOT_VALID);
        }
    }

    /**
     * Регистрирует ответ от платежной системы (callback.php)
     * @param array $response
     * @see callback.php
     */
    protected function set_callback_response(array $response) {
        $this->callback_response = json_decode(file_get_contents('php://input'), true);
    }

    /**
     * Возвращает nc_payment_invoice на основании ответа от ЮKassa
     * @return bool|nc_payment_invoice
     */
    public function load_invoice_on_callback() {
        /**
         * Если покупатель перешёл к оплате несколько раз, на стороне Кассы будет создано несколько платежей.
         * Неоплаченный в течение часа платёж отменяется, приходит сообщение об этом и статус счёта будет изменён
         * (а он мог быть всё же оплачен за этот час).
         * Для остальных платёжных систем такие счета остаются в статусе «Отправлен»; для того, чтобы для Кассы
         * было такое же поведение и не перезатиралась запись last_response об успешном платеже, придётся обрушить
         * выполнение скрипта. @see nc_payment_system::process_callback_response()
         */
        if ($this->get_response_value('object', 'cancellation_details', 'reason') === 'expired_on_confirmation') {
            die('expired_on_confirmation cancellations are ignored');
        }

        return $this->load_invoice($this->get_response_value('object', 'metadata', 'invoice_id'));
    }

    /**
     * Проверяет правильность данных, полученных от ЮKassa через callback.php
     * @param nc_payment_invoice $invoice
     */
    public function validate_payment_callback_response(nc_payment_invoice $invoice = null) {
        $invoice_error_status = false;

        // Нет счёта (значение object.metadata.invoice_id отсутствует или неверное)?
        if (!$invoice) {
            $this->add_error(NETCAT_MODULE_PAYMENT_ERROR_INVOICE_NOT_FOUND);
            return;
        }

        // Не совпадает «подпись»?
        $invoice_signature = $this->get_invoice_signature($invoice);
        $response_signature = $this->get_response_value('object', 'metadata', 'signature');
        if ($invoice_signature !== $response_signature) {
            $invoice_error_status = nc_payment_invoice::STATUS_CALLBACK_ERROR;
            $this->add_error("Wrong 'object.metadata.signature' value");
        }

        // Не совпадает сумма?
        $sum_mismatch =
            $this->get_response_value('object', 'amount', 'value') !== $invoice->get_amount('%0.2F') ||
            $this->get_response_value('object', 'amount', 'currency') !== $this->get_currency_code($invoice->get_currency());
        if ($sum_mismatch) {
            $invoice_error_status = nc_payment_invoice::STATUS_CALLBACK_WRONG_SUM;
            $this->add_error(NETCAT_MODULE_PAYMENT_ERROR_INVALID_SUM);
        }

        if ($invoice_error_status) {
            $invoice->set('status', $invoice_error_status)->save();
        }
    }

    /**
     * Обработка ответа от платёжной системы (выполняется после его проверки)
     * @param nc_payment_invoice $invoice
     */
    public function on_response(nc_payment_invoice $invoice = null) {
        $event = $this->get_response_value('event');

        if ($event === 'payment.succeeded') {
            $this->on_payment_success($invoice);
        } else if ($event === 'payment.canceled') {
            $this->on_payment_rejected($invoice);
        } else if ($event === 'payment.waiting_for_capture' && $invoice) {
            $invoice->set('status', nc_payment_invoice::STATUS_WAITING)->save();
        }
    }


    /**
     * Создаёт чек со статусом 'pending'; возвращает массив с данными для фискализации
     * @param nc_payment_invoice $invoice
     * @return null|array
     */
    protected function create_sell_receipt(nc_payment_invoice $invoice) {
        if (!$this->get_setting('send_receipts')) {
            return null;
        }

        $receipt = $invoice->get_sell_receipt();
        if (!$receipt) {
            return null;
        }

        $receipt_data = array(
            'tax_system_code' => (int)$this->get_setting('tax_system_code') ?: 1,
            'customer' => array(
                'full_name' => $invoice->get('customer_name'),
                'email' => $invoice->get('customer_email') ?: nc_payment_register::get_default_customer_email(),
            ),
            'items' => array(),
        );
        $phone = nc_normalize_phone_number($invoice->get('customer_phone'));
        if ($phone) {
            $receipt_data['customer']['phone'] = str_replace('+', '', $phone);
        }

        $currency_code = $this->get_currency_code($invoice->get_currency());

        /** @var nc_payment_invoice_item $item */
        foreach ($receipt->get_items() as $item) {
            $receipt_data['items'][] = array(
                'description' => $item->get('name'),
                'quantity' => sprintf('%0.3F', $item->get('qty')),
                'amount' => array(
                    'value' => sprintf('%0.2F', $item->get('item_price')),
                    'currency' => $currency_code,
                ),
                'vat_code' => nc_array_value(self::$yookassa_vat_enum, $item->get('vat_rate'), self::$yookassa_default_vat),
                'payment_subject' => nc_array_value(self::$yookassa_payment_subject_enum, $item->get('type'), 'commodity'),
                'payment_mode' => 'full_prepayment',
            );
        }

        $receipt->save_status($receipt::STATUS_PENDING, $receipt_data);
        return $receipt_data;
    }

    /**
     * Проверяет возможность фискализации через ЮKassa
     * @return bool
     */
    public function can_send_receipt_data_with_invoice() {
        return (bool)$this->get_setting('send_receipts');
    }

    /**
     * Вычисляет «подпись» для проверки ответа от ЮKassa
     * @param nc_payment_invoice $invoice
     * @return string
     */
    protected function get_invoice_signature(nc_payment_invoice $invoice) {
        $data = $invoice->get_id() . ':' . $invoice->get('created') . ':' . nc_core::get_object()->get_copy_id();
        return hash_hmac('SHA256', $data, $this->get_setting('secret_key'));
    }

    /**
     * Возвращает URL, на который пользователь будет переадресован платёжной системой
     * после оплаты:
     * — return_url, если задан в настройках, с добавлением invoice_id к нему;
     * — иначе страница объекта заказа, если заказ из интернет-магазина;
     * — иначе адрес раздела личного кабинета, если он указан в настройках сайта;
     * — иначе корень сайта на текущем домене.
     * @param nc_payment_invoice $invoice
     * @return string
     */
    protected function get_return_url(nc_payment_invoice $invoice) {
        $return_url = $this->get_setting('return_url');
        if ($return_url) {
            return $return_url . (strpos($return_url, '?') ? '&' : '?') . 'invoice_id=' . $invoice->get_id();
        }

        $nc_core = nc_core::get_object();
        $site_id = $invoice->get('site_id');

        // Страница заказа
        if ($invoice->get('order_source') === 'netshop') {
            $order_component_id = nc_netshop::get_instance($site_id)->settings->get('OrderComponentID');
            $return_url = (string)nc_object_url($order_component_id, $invoice->get('order_id'));
        }

        // Личный кабинет
        if (!$return_url) {
            $auth_cabinet_subdivision_id = $nc_core->catalogue->get_by_id($site_id, 'AuthCabinetSubID');
            if ($auth_cabinet_subdivision_id) {
                $return_url = (string)nc_folder_url($auth_cabinet_subdivision_id);
            }
        }

        return $return_url ?: nc_get_scheme() . "://$_SERVER[HTTP_HOST]/";
    }
}
