<?php

class nc_payment_system_ffinbank extends nc_payment_system {

    const TARGET_URL = 'https://acq.ffinpay.ru/acq-company-web/payment/pay';
    const TARGET_TEST_URL = 'https://testacq.ffinpay.ru/acq-company-web/payment/pay';

    protected $automatic = true;

    // принимаемые валюты
    protected $accepted_currencies = array('RUB', 'RUR');
    protected $currency_map = array('RUR' => 'RUB');

    // параметры сайта в платежной системе
    protected $settings = array(
        'PARTNER_ID' => null,
        'PASSWORD' => null,
        'BACK_BTN_VISIBLE' => null,
        'BACK_SUCCESS_URL' => null,
        'BACK_FAILURE_URL' => null,
        'TEST_MODE' => null,
    );

    /**
     * @param nc_payment_invoice $invoice
     * @return void
     */
    public function execute_payment_request(nc_payment_invoice $invoice) {
        $inputs = array(
            'partnerId' => $this->get_setting('PARTNER_ID'),
            'type' => 'PAY_BASKET',
            'clientFio' => $invoice->get('customer_name'),
            'clientEmail' => $invoice->get('customer_email'),
            'amount' => $invoice->get_amount('%0.2F'),
            'reference' => $this->get_external_order_id($invoice->get_id()),
            'backBtnVisible' => $this->get_setting('BACK_BTN_VISIBLE'),
            'backBtnSuccessUrl' => $this->get_setting('BACK_SUCCESS_URL'),
            'backBtnFailureUrl' => $this->get_setting('BACK_FAILURE_URL'),
            'currency' => '643',
        );

        $inputs['sign'] = hash('sha512', 
            $inputs['partnerId'] .
            $inputs['reference'] .
            $inputs['additionalIdentifier'] .
            $inputs['type'] .
            $inputs['clientFio'] .
            $inputs['clientEmail'] .
            $inputs['amount'] .
            $inputs['currency'] .
            $inputs['backBtnVisible'] .
            $inputs['backBtnSuccessUrl'] .
            $inputs['backBtnFailureUrl'] .
            $inputs['accountNumber'] .
            $this->get_setting('PASSWORD')
        );

        $nc_core = nc_core::get_object();
        if (!$nc_core->NC_UNICODE) {
            $inputs = $nc_core->utf8->array_win2utf($inputs);
        }

        $url = $this->get_setting('TEST_MODE') ? self::TARGET_TEST_URL : self::TARGET_URL;
 
        ob_end_clean();
        $form = "
            <html>
              <body>
                  <form action='$url' method='post'>
                    {$this->make_inputs($inputs)}
                  </form>
                  <script>
                    document.forms[0].submit();
                  </script>
              </body>
            </html>
            ";
        echo $form;
    }

    /**
     * Получение значения reference (ID в платёжной системе) из ID счёта
     * @param $order_id
     * @return string
     */
    protected function get_external_order_id($order_id) {
        return date('YmdHis') . $order_id;
    }

    /**
     * Получение ID счёта из параметра reference (ID в платёжной системе)
     * @param $external_order_id
     * @return int
     */
    protected function get_internal_invoice_id($external_order_id) {
        return (int)substr($external_order_id, 14);
    }

    /**
     *
     */
    public function validate_payment_request_parameters() {
        $required_settings = array('PARTNER_ID', 'PASSWORD');
        foreach ($required_settings as $key) {
            if (!$this->get_setting($key)) {
                $this->add_error(sprintf(NETCAT_MODULE_PAYMENT_SETTING_MISSING_VALUE, $key));
            }
        }
    }

    /**
     * @param nc_payment_invoice $invoice
     */
    public function on_response(nc_payment_invoice $invoice = null) {
        if ($this->get_response_value('state') === 'PAID') {
            $this->on_payment_success($invoice);
        } else {
            $this->on_payment_failure($invoice);
        }
        echo 'OK';
    }

    /**
     * @param nc_payment_invoice $invoice
     */
    public function validate_payment_callback_response(nc_payment_invoice $invoice = null) {
        $sign = hash('sha512', 
            $this->get_response_value('id') .
            $this->get_response_value('partnerId') .
            $this->get_response_value('reference') .
            $this->get_response_value('additionalIdentifier') .
            $this->get_response_value('type') .
            $this->get_response_value('clientFio') .
            $this->get_response_value('clientEmail') .
            $this->get_response_value('amount') .
            $this->get_response_value('amountClient') .
            $this->get_response_value('currency') .
            $this->get_response_value('state') .
            $this->get_response_value('date') .
            $this->get_response_value('name') .
            $this->get_response_value('pan') .
            $this->get_response_value('reasonPayment') .
            $this->get_response_value('paymentNumber') .
            $this->get_response_value('accountNumber') .
            $this->get_response_value('bankIssuer') .
            $this->get_response_value('BIKBankIssuer') .
            $this->get_setting('PASSWORD')
        );
        if ($sign !== $this->get_response_value('sign')) {
            $this->add_error(NETCAT_MODULE_PAYMENT_ERROR_PRIVATE_SECURITY_IS_NOT_VALID);
            echo NETCAT_MODULE_PAYMENT_ERROR_PRIVATE_SECURITY_IS_NOT_VALID;
        }
    }

    /**
     * @return bool|nc_payment_invoice
     */
    public function load_invoice_on_callback() {
        $reference = $this->get_response_value('reference');
        return $this->load_invoice($this->get_internal_invoice_id($reference));
    }

}
