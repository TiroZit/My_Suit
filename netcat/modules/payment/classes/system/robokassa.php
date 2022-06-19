<?php

class nc_payment_system_robokassa extends nc_payment_system {

    const ERROR_MRCHLOGIN_IS_NOT_VALID = NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_MRCHLOGIN_IS_NOT_VALID;
    const ERROR_INVID_IS_NOT_VALID = NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_INVID_IS_NOT_VALID;
    const ERROR_INVDESC_ID_IS_LONG = NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_INVDESC_ID_IS_LONG;
    const ERROR_PRIVATE_SECURITY_IS_NOT_VALID = NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_PRIVATE_SECURITY_IS_NOT_VALID;

    const TARGET_URL = 'https://auth.robokassa.ru/Merchant/Index.aspx';

    protected $automatic = TRUE;

    // принимаемые валюты
    protected $accepted_currencies = array('RUB', 'RUR');

    // параметры сайта в платежной системе
    protected $settings = array(
        'MrchLogin' => null,
        'MerchantPass1' => null,
        'MerchantPass2' => null,
        'IsTest' => 0,
        'SendReceipts' => false,
    );

    // передаваемые параметры
    protected $request_parameters = array(
        // 'InvId' => null,
        // 'InvDesc' => null,
    );

    // получаемые параметры
    protected $callback_response = array(
        'InvId' => null,
        'OutSum' => null,
    );

    // коды ставок НДС, используемые в чеках
    static protected $robokassa_vat_enum = array(
        '' => 'none',
        0 => 'vat0',
        10 => 'vat10',
        20 => 'vat20',
    );
    static protected $robokassa_default_vat = 'vat20';

    static protected $robokassa_payment_object_enum = array(
        nc_payment_invoice_item::TYPE_COMMODITY => 'commodity',
        nc_payment_invoice_item::TYPE_EXCISED_COMMODITY => 'excise',
        nc_payment_invoice_item::TYPE_JOB => 'job',
        nc_payment_invoice_item::TYPE_SERVICE => 'service',
        nc_payment_invoice_item::TYPE_INTELLECTUAL_ACTIVITY => 'intellectual_activity',
        nc_payment_invoice_item::TYPE_PAYMENT => 'payment',
        nc_payment_invoice_item::TYPE_COMPOSITE => 'composite',
        nc_payment_invoice_item::TYPE_OTHER => 'another',
    );
    static protected $robokassa_default_payment_object_enum = 'commodity';

    static protected $robokassa_payment_method = array(
        nc_payment::PAYMENT_METHOD_FULL_PREPAYMENT => 'full_prepayment',
        nc_payment::PAYMENT_METHOD_PARTIAL_PREPAYMENT => 'prepayment',
        nc_payment::PAYMENT_METHOD_ADVANCE => 'advance',
        nc_payment::PAYMENT_METHOD_FULL_PAYMENT => 'full_payment',
        nc_payment::PAYMENT_METHOD_PARTIAL_PAYMENT => 'partial_payment',
        nc_payment::PAYMENT_METHOD_CREDIT => 'credit',
        nc_payment::PAYMENT_METHOD_CREDIT_PAYMENT => 'credit_payment',
    );
    static protected $robokassa_default_payment_method = 'full_prepayment';

    /**
     *
     */
    public function execute_payment_request(nc_payment_invoice $invoice) {
        $amount = $invoice->get_amount("%0.2F");

        $receipt_data = $this->create_sell_receipt($invoice);        

        $signature_values = array();
        $signature_values[] = $this->get_setting('MrchLogin');
        $signature_values[] = $amount;
        $signature_values[] = $invoice->get_id();
        if ($receipt_data) {
            $signature_values[] = $receipt_data; 
        }
        $signature_values[] = $this->get_setting('MerchantPass1');

        $signature = md5(implode(":", $signature_values));

        $payment_data = array(
            'IsTest' => (int)$this->get_setting('IsTest'),
            'MrchLogin' => $this->get_setting('MrchLogin'),
            'OutSum' => $amount,
            'InvId' => $invoice->get_id(),
            'Desc' => $invoice->get_description(),
            'SignatureValue' => $signature,
        );
        if ($receipt_data) {
            $payment_data['Receipt'] = $receipt_data;
        }

        ob_end_clean();
        $form = "
            <html>
              <body>
                    <form action='" . nc_payment_system_robokassa::TARGET_URL . "' method='post'>" .
                    $this->make_inputs($payment_data) . "
                </form>
                <script>
                  document.forms[0].submit();
                </script>
              </body>
            </html>";
        echo $form;
    }

    /**
     * @param nc_payment_invoice $invoice
     */
    public function on_response(nc_payment_invoice $invoice = null) {
        $this->on_payment_success($invoice);
        echo 'OK' . $invoice->get_id();
    }

    /**
     * Создаёт чек со статусом 'pending', возвращает массив с данными для фискализации
     * @param nc_payment_invoice $invoice
     * @return null|string
     */
    protected function create_sell_receipt(nc_payment_invoice $invoice) {
        if (!$this->can_send_receipt_data_with_invoice()) {
            return null;
        }

        $receipt = $invoice->get_sell_receipt();
        if (!$receipt) {
            return null;
        }

        $items = $receipt->get_items();

        if (!$items->count()) {
            return null;
        }

        // sno - система налогообложения, в константах и в Robokassa используются одинаковые значения
        $receipt_data = array(
            'sno' => (nc_payment::get_setting('PaymentRegisterSN', $invoice->get('site_id')) ?: 'osn'),
            'items' => array(),
        );

        /** @var nc_payment_invoice_item $item */
        foreach ($items as $item) {
            $receipt_data['items'][] = array(
                'name' => $item->get('name'),
                'quantity' => sprintf('%0.3F', $item->get('qty')),
                'sum' => (float)$item->get('total_price'),
                'payment_method' => nc_array_value(self::$robokassa_payment_method, $item->get('payment_method_id'), self::$robokassa_default_payment_method),
                'payment_object' => nc_array_value(self::$robokassa_payment_object_enum, $item->get('type'), self::$robokassa_default_payment_object_enum),
                'tax' => nc_array_value(self::$robokassa_vat_enum, $item->get('vat_rate'), self::$robokassa_default_vat),
            );
        }

        $receipt->save_status($receipt::STATUS_PENDING, $receipt_data);

        return urlencode(json_encode($receipt_data));
    }

    /**
     * Проверяет возможность фискализации через Robokassa
     * @return bool
     */
    public function can_send_receipt_data_with_invoice() {
        return (bool)$this->get_setting('SendReceipts');
    }

    /**
     *
     */
    public function validate_payment_request_parameters() {
        if (!$this->get_setting('MrchLogin')) {
            $this->add_error(self::ERROR_MRCHLOGIN_IS_NOT_VALID);
        }
    }

    /**
     * @param nc_payment_invoice $invoice
     */
    public function validate_payment_callback_response(nc_payment_invoice $invoice = null) {
        $their_key = $this->get_response_value('SignatureValue');
        $out_sum = $this->get_response_value('OutSum');
        $inv_id = $this->get_response_value('InvId');

        if (!is_numeric($inv_id)) {
            $this->add_error(self::ERROR_INVID_IS_NOT_VALID);
        }

        $signature_values = array(
            $out_sum,
            $inv_id,
            $this->get_setting('MerchantPass2')
        );
        $our_key = strtoupper(md5(implode(":", $signature_values)));

        if (!$invoice || $our_key !== $their_key || $out_sum != $invoice->get_amount()) {
            $this->add_error(self::ERROR_PRIVATE_SECURITY_IS_NOT_VALID);

            if ($invoice) {
                $invoice->set('status', nc_payment_invoice::STATUS_CALLBACK_ERROR);
                $invoice->save();
            }
        }
    }

    public function load_invoice_on_callback() {
        return $this->load_invoice($this->get_response_value('InvId'));
    }
}
