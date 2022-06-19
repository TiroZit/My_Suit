<?php

class nc_payment_system_sber extends nc_payment_system {

    const SBER_PROD_URL = 'https://securepayments.sberbank.ru/payment/rest/';
    const SBER_TEST_URL = 'https://3dsec.sberbank.ru/payment/rest/';

    protected $automatic = true;

    // принимаемые валюты
    protected $accepted_currencies = array('RUB', 'RUR', 'BYN');
    protected $currency_map = array('RUR' => 'RUB');

    // параметры платежной системы
    protected $settings = array(
        'user_name' => null,
        'password' => null,
        'test_mode' => 1,
        'two_stage' => 0,
        'success_url' => null,
        'fail_url' => null,
        'send_order' => 0,
        'tax_system' => null,
    );

    // передаваемые параметры
    protected $request_parameters = array();

    // получаемые параметры
    protected $callback_response = array(
        'formUrl' => null,
        'orderNumber' => null
    );

    static protected $sber_vats = array(
        null => 0,
        '0' => 1,
        '10' => 2,
        '18' => 3,
        '20' => 6
    );

    static protected $sber_payment_object_enum = array(
        nc_payment_invoice_item::TYPE_COMMODITY => 1,
        nc_payment_invoice_item::TYPE_EXCISED_COMMODITY => 2,
        nc_payment_invoice_item::TYPE_JOB => 3,
        nc_payment_invoice_item::TYPE_SERVICE => 4,
        nc_payment_invoice_item::TYPE_INTELLECTUAL_ACTIVITY => 9,
        nc_payment_invoice_item::TYPE_PAYMENT => 10,
        nc_payment_invoice_item::TYPE_COMPOSITE => 12,
        nc_payment_invoice_item::TYPE_OTHER => 13,
    );

    protected function execute_payment_request(nc_payment_invoice $invoice) {
        $nc_core = nc_Core::get_object();
        $site = $nc_core->catalogue->get_url_by_id($nc_core->catalogue->id());
        $invoice_id = $invoice->get_id();
        $return_url = $site . nc_module_path('payment') . 'callback.php?type=result&paySystem=' . get_class($this) . '&invoice_id=' . $invoice_id;

        $data = array(
            'userName' => $this->get_setting('user_name'),
            'password' => $this->get_setting('password'),
            'orderNumber' => $invoice_id . "_" . time(),
            'amount' => round($invoice->get_amount() * 100),
            'returnUrl' => $return_url,
            'jsonParams' => json_encode(
                array(
                    'CMS:' => 'NetCat ' . $nc_core->get_settings('VersionNumber'),
                )
            ),
        );

        //collect order data
        if ($this->get_setting('send_order') == 1) {

            $data['taxSystem'] = $this->get_setting('tax_system') ?: 0;

            $items = array();
            $items_count = 1;

            $sell_receipt = $invoice->get_sell_receipt();
            foreach ($sell_receipt->get_items() as $i) {
                if ($i['source_item_id']) {
                    $item = array();
                    $product_price = round((float)$i->get('item_price') * 100);
                    $product_amount = round($i->get('qty') * (float)$i->get('item_price') * 100);
                    $vat = nc_array_value(self::$sber_vats, $i->get('vat_rate'), self::$sber_vats['none']);

                    $item['positionId'] = $items_count++;
                    $item['name'] = nc_substr($i->get('name'), 0, 64);
                    $item['quantity'] = array(
                        'value' => sprintf('%0.3F', $i->get('qty')),
                        'measure' => 'шт'
                    );
                    $item['itemAmount'] = $product_amount;
                    $item['itemCode'] = $i->get('id');
                    $item['tax'] = array(
                        'taxType' => $vat,
                    );
                    $item['itemPrice'] = $product_price;

                    // FFD 1.05
                    $attributes = array();
                    $attributes[] = array(
                        'name' => 'paymentMethod',
                        'value' => 1,
                    );
                    $attributes[] = array(
                        'name' => 'paymentObject',
                        'value' => nc_array_value(self::$sber_payment_object_enum, $i->get('type'), 1),
                    );

                    $item['itemAttributes']['attributes'] = $attributes;

                    $items[] = $item;
                }
            }

            $order_bundle = array(
                'orderCreationDate' => date("c"),
                'customerDetails' => array(
                    'email' => $invoice->get('customer_email'),
                    'phone' => nc_normalize_phone_number($invoice->get('customer_phone')),
                ),
                'cartItems' => array('items' => $items)
            );

            $data['orderBundle'] = json_encode($order_bundle);
        }

        $action_adr = ($this->get_setting('test_mode') == 1) ? self::SBER_TEST_URL : self::SBER_PROD_URL;

        if ($this->get_setting('two_stage') == 1) {
            $action_adr .= 'registerPreAuth.do';
        } else {
            $action_adr .= 'register.do';
        }

        $response = $this->execute_payment_session($data, $action_adr);
        $invoice->set('last_response', $response);

        if ($response['errorCode'] == 0) {
            $invoice->save();
            header('Location: ' . $response['formUrl']);
        } else {
            $invoice->set('status', nc_payment_invoice::STATUS_CALLBACK_ERROR);
            $invoice->save();
            die('RBSPayment[ERROR]: ' . $response['errorMessage']);
        }

        exit;
    }

    protected function execute_payment_session($data, $url) {
        return $this->curl_post_data($data, $url);
    }

    protected function curl_post_data($args, $action_adr) {
        $nc_core = nc_Core::get_object();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $action_adr,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($args, '', '&'),
            CURLOPT_HTTPHEADER => array('CMS: NetCat ' . $nc_core->get_settings('VersionNumber')),
        ));

        $json = curl_exec($curl);

        if ($json == false) {
            $this->add_error('Curl error: ' . curl_error($curl));
            die('Curl error: ' . curl_error($curl) . '<br>');
        }

        //Преобразуем JSON в ассоциативный массив
        $result = json_decode($json, true);
        curl_close($curl);

        $has_invoice_id = isset($args['orderNumber']) && preg_match('@.+_.+@', $args['orderNumber']);

        if ($has_invoice_id) {
            $invoice_id = explode('_', $args['orderNumber']);
            $invoice_id = $invoice_id[0];
            $invoice = $this->load_invoice($invoice_id);

            if (!$invoice) {
                $this->add_error(NETCAT_MODULE_PAYMENT_ERROR_INVOICE_NOT_FOUND);
            } else {
                $invoice->set('last_response', $json);
            }
        } else {
            $this->add_error(NETCAT_MODULE_PAYMENT_ERROR_INVOICE_NOT_FOUND);
        }

        return $result;
    }

    /**
     * @param nc_payment_invoice $invoice
     */
    protected function on_response(nc_payment_invoice $invoice = null) {
        $invoice_status = $invoice->get('status');
        $success_url = $this->get_setting('success_url') ?: '/';
        $fail_url = $this->get_setting('fail_url') ?: '/';

        // после Location нельзя ставить exit, т.к. после этого метода должен выполниться notify_listeners()
        // см. /netcat/modules/payment/classes/system.php, метод process_callback_response()
        if ($invoice_status === nc_payment_invoice::STATUS_CALLBACK_ERROR) {
            $this->on_payment_failure($invoice);
            header('Location: ' . $fail_url);
        } else {
            $this->on_payment_success($invoice);
            header('Location: ' . $success_url);
        }
    }

    /**
     * Проверяет наличие обязательных параметров для выполнения запроса на оплату
     * Согласно документации, нужно указывать либо пару логин/пароль, либо токен
     * В рамках текущего класса логин/пароль являются обязательными, т.к. отсутствует реализация использования токена
     */
    public function validate_payment_request_parameters() {
        if (!$this->get_setting('user_name')) {
            $this->add_error(NETCAT_MODULE_PAYMENT_SBERBANK_ERROR_USER_NAME_IS_NULL);
        }

        if (!$this->get_setting('password')) {
            $this->add_error(NETCAT_MODULE_PAYMENT_SBERBANK_ERROR_USER_PASSWORD_IS_NULL);
        }
    }

    /**
     * @param nc_payment_invoice $invoice
     */
    public function validate_payment_callback_response(nc_payment_invoice $invoice = null) {
        if (!$invoice) {
            $this->add_error(NETCAT_MODULE_PAYMENT_ERROR_INVOICE_NOT_FOUND);
            return;
        }

        $data = array(
            'userName' => $this->get_setting('user_name'),
            'password' => $this->get_setting('password'),
            'orderId' => $this->get_response_value('orderId'),
            'orderNumber' => $invoice->get_id() . '_' . time(),
        );

        $url = ($this->get_setting('test_mode') == 1) ? self::SBER_TEST_URL : self::SBER_PROD_URL;
        $response = $this->curl_post_data($data, $url . 'getOrderStatusExtended.do');
        $order_status = $response['orderStatus'];

        //$status_description = array(
        //    0 => 'заказ зарегистрирован, но не оплачен',
        //    1 => 'предавторизованная сумма удержана (для двухстадийных платежей)',
        //    2 => 'проведена полная авторизация суммы заказа',
        //    3 => 'авторизация отменена',
        //    4 => 'по транзакции была проведена операция возврата',
        //    5 => 'инициирована авторизация через сервер контроля доступа банка-эмитента',
        //    6 => 'авторизация отклонена',
        //);

        if ($order_status != '1' && $order_status != '2') {
            // Ошибка не добавляется через add_error() из-за того, что переадресация на fail_url
            // выполняется на сайте (см. on_response()), а не платёжной системой

            //if (isset($status_description[$order_status]) && $status_description[$order_status]) {
            //    $invoice->set('last_response', $status_description[$order_status]);
            //}
            $invoice->set('status', nc_payment_invoice::STATUS_CALLBACK_ERROR);
            $invoice->save();
        }
    }

    protected function load_invoice_on_callback() {
        $invoice_id = $this->get_response_value('invoice_id');
        return $this->load_invoice($invoice_id);
    }

    /**
     * @return bool
     */
    public function can_send_receipt_data_with_invoice() {
        return $this->get_setting('send_order') == 1;
    }
}
