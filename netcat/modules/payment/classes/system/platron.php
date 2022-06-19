<?php

class nc_payment_system_platron extends nc_payment_system {

    const ERROR_MERCHANT_ID = NETCAT_MODULE_PAYMENT_PLATRON_ERROR_MERCHANT_ID_IS_NOT_VALID;
    const ERROR_SECRET_KEY = NETCAT_MODULE_PAYMENT_PLATRON_ERROR_SECRET_KEY_IS_NOT_VALID;

    const RECEIPT_SCRIPT_NAME = 'receipt.php';
    const PAYMENT_SCRIPT_NAME = 'init_payment.php';

    protected $automatic = true;

    // принимаемые валюты
    protected $accepted_currencies = array('USD', 'EUR', 'RUB', 'RUR');
    protected $currency_map = array('RUR' => 'RUB');

    // параметры сайта в платежной системе
    protected $settings = array(
        'merchant_id' => null,
        'secret_key' => null,
        'lifetime' => 0,
        'testmode' => 0,
        'success_url' => null,
        'failure_url' => null,
        'ofd_send_receipt' => 0,
    );

    // передаваемые параметры
    protected $request_parameters = array( // 'InvId' => null,
        // 'InvDesc' => null,
    );

    // получаемые параметры
    protected $callback_response = array(
        'InvId' => null,
        'OutSum' => null,
    );

    static protected $vat_map = array(
        0    => '0',
        10   => '10',
        20   => '20',
        '' => 'none',
    );

    static protected $platron_default_vat = '20';

    static protected $platron_payment_object_enum = array(
        nc_payment_invoice_item::TYPE_COMMODITY => 'product',
        nc_payment_invoice_item::TYPE_EXCISED_COMMODITY => 'product_practical',
        nc_payment_invoice_item::TYPE_JOB => 'work',
        nc_payment_invoice_item::TYPE_SERVICE => 'service',
        nc_payment_invoice_item::TYPE_INTELLECTUAL_ACTIVITY => 'rid',
        nc_payment_invoice_item::TYPE_PAYMENT => 'payment',
        nc_payment_invoice_item::TYPE_COMPOSITE => 'composite',
        nc_payment_invoice_item::TYPE_OTHER => 'other',
    );

    /**
     * @param nc_payment_invoice $invoice
     */
    public function execute_payment_request(nc_payment_invoice $invoice) {
        $currency_code = $this->get_currency_code($invoice->get_currency());

        $script_url = nc_get_scheme() . '://' . $_SERVER['HTTP_HOST'] . nc_module_path('payment') .
            'callback.php?paySystem=nc_payment_system_platron&invoice_id=' . $invoice->get_id();

        $data = array(
            'pg_merchant_id' => $this->get_setting('merchant_id'),
            'pg_order_id' => $invoice->get('order_id'),
            'pg_currency' => $currency_code,
            'pg_amount' => $invoice->get_amount('%0.2F'),
            'pg_lifetime' => $this->get_setting('lifetime') * 60, // в секундах
            'pg_testing_mode' => $this->get_setting('testmode'),
            'pg_description' => mb_substr($invoice->get_description(), 0, 255, 'UTF-8'),
            'pg_check_url' => $script_url . '&type=check',
            'pg_result_url' => $script_url . '&type=result',
            'pg_request_method' => 'POST',
            'pg_salt' => rand(21, 43433), // Параметры безопасности сообщения. Необходима генерация pg_salt и подписи сообщения.
            'cms_payment_module' => 'Netcat',
        );

        if ($this->get_setting('success_url')) {
            $data['pg_success_url'] = $this->get_setting('success_url');
        }

        if ($this->get_setting('failure_url')) {
            $data['pg_failure_url'] = $this->get_setting('failure_url');
        }

        $filtered_phone_number = preg_replace('/\D+/', '', $invoice->get('customer_phone'));
        if (strlen($filtered_phone_number)) {
            $data['pg_user_phone'] = $filtered_phone_number;
        }

        if (preg_match('/^.+@.+\..+$/', $invoice->get('customer_email'))) {
            $data['pg_user_email'] = $invoice->get('customer_email');
            $data['pg_user_contact_email'] = $invoice->get('customer_email');
        }

        $data['pg_sig'] = $this->make_signature($this::PAYMENT_SCRIPT_NAME, $data, $this->get_setting('secret_key'));

        $init_payment_response = $this->do_platron_api_request($this::PAYMENT_SCRIPT_NAME, $data, $invoice);
        $last_response = $init_payment_response->asXML();

        if ($this->get_setting('ofd_send_receipt') == '1') {
            $pg_merchant_id = $this->get_setting('merchant_id');
            $pg_payment_id = $init_payment_response->pg_payment_id;
            $pg_receipt_items = $this->get_ofd_receipt_items($invoice);
            $pg_secret_key = $this->get_setting('secret_key');

            $receipt_xml = $this->create_ofd_receipt_request($pg_merchant_id, $pg_payment_id, $pg_receipt_items, $pg_secret_key);
            $create_receipt_response = $this->do_platron_api_request($this::RECEIPT_SCRIPT_NAME, array('pg_xml' => $receipt_xml->asXML()), $invoice);
            $last_response .= $create_receipt_response->asXML();
        }
        $invoice->set('last_response', $last_response);
        $invoice->save();

        header('Location: ' . $init_payment_response->pg_redirect_url);
        exit;
    }

    /**
     * @param nc_payment_invoice $invoice
     */
    public function on_response(nc_payment_invoice $invoice = null) {
    }

    /**
     *
     */
    public function validate_payment_request_parameters() {
        if (!$this->get_setting('merchant_id')) {
            $this->add_error(nc_payment_system_platron::ERROR_MERCHANT_ID);
        } elseif (!$this->get_setting('secret_key')) {
            $this->add_error(nc_payment_system_platron::ERROR_SECRET_KEY);
        }

    }

    /**
     * @param nc_payment_invoice $invoice
     */
    public function validate_payment_callback_response(nc_payment_invoice $invoice = null) {
        $given_sign = $_POST['pg_sig'];

        $expected_sign = $this->make_signature(basename($_SERVER['PHP_SELF']), $_POST, $this->get_setting('secret_key'));
        $is_sign_valid = (string)$given_sign === (string)$expected_sign;

        if (empty($_POST['pg_sig']) || !$is_sign_valid) {
            $invoice->set('last_response', 'Wrong signature');
            $invoice->set('status', nc_payment_invoice::STATUS_CALLBACK_ERROR);
            $invoice->save();
            die('Wrong signature');
        }

        // Проверка существования счёта
        if (!$invoice) {
            $response_description = 'Счёт ' . ($this->get_response_value('invoice_id')) . ' не существует';
            $this->add_error($response_description);
            $this->respond_with_xml('error', $response_description);
        }

        // Проверка статуса счёта
        $invoice_status_id = $invoice->get('status');
        $unacceptable_invoice_statuses = array(
            nc_payment_invoice::STATUS_SUCCESS => 'Счёт уже оплачен',
            nc_payment_invoice::STATUS_REJECTED => 'Счёт отклонён',
        );

        if (isset($unacceptable_invoice_statuses[$invoice_status_id])) {
            $response_status = $this->get_response_value('pg_can_reject') ? 'rejected' : 'error';
            $response_description = $unacceptable_invoice_statuses[$invoice_status_id];
            $this->respond_with_xml($response_status, $response_description);
        }

        switch ($this->get_response_value('type')) {
            case 'check':
                // все необходимые проверки выполнены выше: подпись, наличие счёта, его статус
                $this->respond_with_xml('ok');
                break;

            case 'result':
                // все необходимые проверки выполнены выше: подпись, наличие счёта, его статус
                if ($this->get_response_value('pg_result') == 1) {
                    $this->on_payment_success($invoice);
                    $response_description = 'Оплата принята';
                } else {
                    $this->on_payment_failure($invoice);
                    $response_description = 'Оплата не принята';
                }

                $this->respond_with_xml('ok', $response_description);
                break;

            default:
                die('Wrong request type');
        }
    }

    /**
     * @return bool|nc_payment_invoice
     */
    public function load_invoice_on_callback() {
        return $this->load_invoice($this->get_response_value('invoice_id'));
    }

    /**
     * @param string $status
     * @param null|string $description
     */
    protected function respond_with_xml($status, $description = null) {
        $data = array();
        $data['pg_status'] = $status;
        if (strlen($description)) {
            $description_key = ($status === 'ok' ? 'pg_description' : 'pg_error_description');
            $data[$description_key] = $description;
        }
        $data['pg_salt'] = $this->get_response_value('pg_salt'); // в ответе необходимо указывать тот же pg_salt, что и в запросе
        $data['pg_sig'] = $this->make_signature(basename($_SERVER['PHP_SELF']), $data, $this->get_setting('secret_key'));

        $xml_response = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><response/>');
        foreach ($data as $key => $value) {
            $xml_response->addChild($key, $value);
        }

        header('Content-type: text/xml');
        print $xml_response->asXML();
    }

    protected function do_platron_api_request($script_name, $params, $invoice) {
        $data = http_build_query($params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://platron.ru/' . $script_name);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_NOPROGRESS, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        $response = curl_exec($ch);
        if ($error = curl_error($ch)) {
            $invoice->set('last_response', 'API request error: ' . $error);
            $invoice->set('status', nc_payment_invoice::STATUS_CALLBACK_ERROR);
            $invoice->save();
        }
        curl_close($ch);

        try {
            $xml_response = new SimpleXMLElement($response);
        } catch (Exception $e) {
            $error_text = "API response error: " . $e->getMessage();
            $invoice->set('last_response', $error_text);
            $invoice->set('status', nc_payment_invoice::STATUS_CALLBACK_ERROR);
            $invoice->save();
            throw new Exception($error_text);
        }

        if (!$this->check_xml_signature($script_name, $xml_response, $this->get_setting('secret_key'))) {
            $error_text = 'API response error: invalid signature';
            $invoice->set('last_response', $error_text);
            $invoice->set('status', nc_payment_invoice::STATUS_CALLBACK_ERROR);
            $invoice->save();
            throw new Exception($error_text);
        }

        if ($xml_response->pg_status === 'error') {
            $error_text = 'API response error: ' . $xml_response->pg_error_description;
            $invoice->set('last_response', $error_text);
            $invoice->set('status', nc_payment_invoice::STATUS_CALLBACK_ERROR);
            $invoice->save();
            throw new Exception($error_text);
        }

        return $xml_response;
    }

    /**
     * @param nc_payment_invoice $invoice
     * @return array
     * @throws nc_record_exception
     */
    protected function get_ofd_receipt_items(nc_payment_invoice $invoice) {
        $receipt_items = array();
        $receipt = $invoice->get_sell_receipt();

        foreach ($receipt->get_items() as $item) {
            $item_vat = nc_array_value(self::$vat_map, $item->get('vat_rate'), self::$platron_default_vat);
            $vat = $item_vat ?: self::$platron_default_vat;
            $item_qty = round(floatval($item->get('qty')), 3);
            $item_qty = str_replace(',', '.', $item_qty);

            $receipt_items[] = array(
                'pg_label' => nc_substr($item->get('name'), 0, 128),
                'pg_amount' => sprintf('%0.2F', $item->get('total_price')),
                'pg_price' => sprintf('%0.2F', $item->get('item_price')),
                'pg_quantity' => $item_qty,
                'pg_vat' => $vat,
                'pg_type' => nc_array_value(self::$platron_payment_object_enum, $item->get('type'), 'product'),
            );
        }

        return $receipt_items;
    }

    public function can_send_receipt_data_with_invoice() {
        return boolval($this->get_setting('ofd_send_receipt'));
    }

    private function create_ofd_receipt_request($merchant_id, $payment_id, array $items, $secret_key) {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><request></request>');
        $salt = md5((string) time());

        $data['pg_merchant_id'] = $merchant_id;
        $data['pg_operation_type'] = 'payment';
        $data['pg_payment_id'] = $payment_id;
        $data['pg_items'] = $items;

        foreach ($data as $param_name => $param_value) {
            if ($param_name == 'pg_items') {
                foreach ($param_value as $item_params) {
                    $item_element = $xml->addChild($param_name);
                    foreach ($item_params as $item_param_name => $item_param_value) {
                        $item_element->addChild($item_param_name, $item_param_value);
                    }
                }
                continue;
            }
            $xml->addChild($param_name, $param_value);
        }

        $xml->addChild('pg_salt', $salt);
        $flat_params = $this->make_flat_params_xml($xml);
        $signature = $this->make_signature($this::RECEIPT_SCRIPT_NAME, $flat_params, $secret_key);
        $xml->addChild('pg_sig', $signature);

        return $xml;
    }

    private function make_signature($script_name, array $params, $secret_key) {
        unset($params['pg_sig']);

        ksort($params);

        array_unshift($params, $script_name);
        array_push($params, $secret_key);

        $result = join(';', $params);

        return md5($result);
    }

    private function check_xml_signature($script_name, $xml, $secret_key) {
        if (!$xml instanceof SimpleXMLElement) {
            $xml = new SimpleXMLElement($xml);
        }
        $flat_params = $this->make_flat_params_xml($xml);
        $given_sign = (string)$xml->pg_sig;
        $expected_sign = (string)$this->make_signature($script_name, $flat_params, $secret_key);

        return $given_sign === $expected_sign;
    }

    private function make_flat_params_xml($xml, $parent_name = '') {
        if (!$xml instanceof SimpleXMLElement) {
            $xml = new SimpleXMLElement($xml);
        }

        $params = array();
        $i = 0;
        foreach ($xml->children() as $tag) {
            $i++;
            if ('pg_sig' == $tag->getName()) {
                continue;
            }

            /**
             * Имя делаем вида tag001subtag001
             * Чтобы можно было потом нормально отсортировать и вложенные узлы не запутались при сортировке
             */
            $name = $parent_name . $tag->getName() . sprintf('%03d', $i);

            if ($tag->children()->count() > 0) {
                $params = array_merge($params, $this->make_flat_params_xml($tag, $name));
                continue;
            }

            $params += array($name => (string)$tag);
        }

        return $params;
    }
}