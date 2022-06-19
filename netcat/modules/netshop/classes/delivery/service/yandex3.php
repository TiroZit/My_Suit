<?php

/**
 * Интеграция с Яндекс.Доставкой v3
 */
class nc_netshop_delivery_service_yandex3 extends nc_netshop_delivery_service {

    /** @var string название службы */
    protected $name = NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX;

    /** @var string тип доставки */
    protected $delivery_type = nc_netshop_delivery::DELIVERY_TYPE_MULTIPLE;

    /** @var bool служба может предложить более одного варианта доставки */
    protected $can_provide_multiple_variants = true;

    /** @var int максимальное количество ПВЗ за один запрос */
    protected $yandex_pickup_point_request_size = 100;

    /** @var array тип доставки в Netcat => тип доставки в Яндекс.Доставке */
    protected $yandex_delivery_types = array(
        nc_netshop_delivery::DELIVERY_TYPE_COURIER => 'COURIER',
        nc_netshop_delivery::DELIVERY_TYPE_PICKUP => 'PICKUP',
        nc_netshop_delivery::DELIVERY_TYPE_POST => 'POST',
    );

    /**
     * Поля, которым нужны соответствия
     * @var array
     */

    protected $mapped_fields = array(
        'from_city' => NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FROM_CITY,
        'to_zipcode' => NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_ZIP_CODE,
        'to_city' => NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_CITY,
        'to_address' =>  NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_ADDRESS,
        'to_street' =>  NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_STREET,
        'to_house' =>  NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_HOUSE,
        'to_housing' =>  NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_HOUSING,
        'to_building' =>  NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_BUILDING,
        'to_flat' =>  NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_FLAT,
        'full_name' =>  NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FULL_NAME,
        'last_name' =>  NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_LAST_NAME,
        'first_name' =>  NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FIRST_NAME,
        'middle_name' =>  NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_MIDDLE_NAME,
    );

    /**
     * Рассчитать стоимость посылки.
     * При успешном выполнении возвращается массив:
     * array(
     *     'price' => стоимость доставки,
     *     'currency' => валюта стоимости доставки
     *     'min_days' => минимальное количество дней на доставку
     *     'max_days' => максимальное количество дней на доставку
     * )
     *
     * При ошибке возвращается null
     *
     * @return array|null
     */
    public function calculate_delivery() {
        return null;
    }

    /**
     * @param nc_netshop_delivery_method $method
     * @return nc_netshop_delivery_method_collection
     */
    public function get_variants(nc_netshop_delivery_method $method) {
        @set_time_limit(0);

        $response = $this->get_yandex_delivery_variant_data(array(
            'shipment' => array(
                'date' => date('Y-m-d', strtotime('+' . $method->get_days_until_shipment() . ' days')),
            ),
        ));

        if (empty($response[0])) {
            return new nc_netshop_delivery_method_collection();
        }

        // Добавим информацию о вариантах доставки, т.к. в конвертере нет доступа к make_yandex_api_request()
        $custom_pickup_data = array();
        foreach ($response as $key => $item) {
            if (isset($item['pickupPointIds'])) {
                $custom_pickup_data = array();
                // В delivery options возвращаются только ID для пунктов выдачи, информация по ним получается отдельным запросом
                // @see: https://yandex.ru/dev/delivery-3/doc/dg/reference/put-pickup-points.html#put-pickup-points__input
                // при попытке запросить более 100 ПВЗ возникает ошибка
                foreach (array_chunk($item['pickupPointIds'], $this->yandex_pickup_point_request_size) as $points) {
                    $custom_pickup_data += $this->make_yandex_api_request('PUT', 'pickup-points', array('pickupPointIds' => $points));
                }
            }
            $response[$key]['custom_pickup_data'] = $custom_pickup_data;
        }

        $converter = new nc_netshop_delivery_service_yandex3_converter($this, $this->data);
        return $converter->get_delivery_variants($response);
    }

    /**
     * Возвращает массив с описанием дополнительных настроек способа доставки
     * (в формате, подходящем для nc_a2f).
     *
     * @return array
     */
    public function get_settings_fields() {
        return array(
            'yandex_sender_id' => array(
                'type' => 'string',
                'caption' => NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SENDER_ID,
                'size' => 40,
            ),
            'yandex_oauth_token' => array(
                'type' => 'string',
                'caption' => NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_OAUTH_TOKEN,
                'size' => 40,
            ),
            'payment_charge' => array( //  см. в nc_netshop_delivery_service_yandex3_converter
                'type' => 'select',
                'subtype' => 'static',
                'caption' => NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE,
                'values' => array(
                    0 => NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE_INCLUDED,
                    1 => NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE_EXTRA,
                ),
                'default_value' => 0,
            ),
        );
    }

    /**
     * Создание заказа в Яндекс.Доставке
     * @param nc_netshop_order $order
     */
    public function checkout(nc_netshop_order $order) {
        // Создадим черновик заказа.
        // Заказ на доставку не подтверждается автоматически, это должен сделать сотрудник вручную в ЛК Я.Доставки после проверки.
        $this->create_yandex_order($order);
    }

    // ----- Yandex-specific -----

    /**
     * Создание заказа в Яндекс.Доставке
     *
     * @param nc_netshop_order $order
     * @return string|null $yandex_order_id
     */
    protected function create_yandex_order(nc_netshop_order $order) {
        // Способ доставки
        $delivery_method = $order->get_delivery_method();

        // Данные клиента
        list($client_last_name, $client_first_name, $client_middle_name) = $this->get_yandex_client_name_parts();

        // ID тарифа и ПВЗ
        $yandex_tariff_id = nc_array_value($order->get_delivery_method(), 'external_id');
        $yandex_pickup_point_id = nc_array_value($order->get_delivery_point(), 'external_id');

        if (!$yandex_tariff_id) {
            return null;
        }

        // Адрес доставки, включая город
        $order_full_address = $this->get_yandex_full_address($order);
        $postal_code = $this->data['to_zipcode'] ?: $this->get_yandex_postal_code($order_full_address);
        if ($postal_code) {
            $order_full_address = "$postal_code, $order_full_address";
        }

        $shipment_date = date('Y-m-d', strtotime('+' . $delivery_method->get_days_until_shipment() . ' days'));

        // Оплата при получении?
        $payment_method = $order->get_payment_method();
        $payment_on_delivery = $payment_method && $payment_method->get('payment_from_delivery');
        if ($payment_on_delivery) {
            $yandex_payment_method = $payment_method->get('payment_on_delivery_card') ? 'CARD' : 'CASH';
        } else {
            $yandex_payment_method = 'PREPAID';
        }

        $item_totals = $order->get_item_totals();

        // Стоимость доставки (наценка за оплату добавляется к стоимости доставки)
        $delivery_cost_for_customer = $order['DeliveryCost'] - $order['DeliveryDiscountSum'] + $order['PaymentCost'];

        $netshop = nc_netshop::get_instance($order->get_catalogue_id());
        // В Netcat VAT = 0 означает, что товар НДС не облагается (а не НДС 0%); пустая строка — значение по умолчанию из настроек магазина
        $vat_our_to_yandex = array(20 => 'VAT_20', 10 => 'VAT_10', 0 => 'NO_VAT');
        $vat_our_to_yandex[''] = nc_array_value($vat_our_to_yandex, $netshop->get_setting('VAT'), 'NO_VAT');

        // Товары в заказе
        $items = $order->get_items_with_distributed_cart_discount();
        $yandex_order_items = array();

        foreach ($items as $item) {
            $yandex_order_items[] = array(
                'externalId' => $item['Class_ID'] . '_' . $item['Message_ID'],
                'name' => $item['FullName'],
                'count' => $item['Qty'],
                'price' => $item['ItemPrice'],
                'assessedValue' => $item['ItemPrice'],
                'tax' => nc_array_value($vat_our_to_yandex, $item['VAT'], 'NO_VAT'),
                'dimensions' => array(
                    'length' => (int)($item['PackageSize1'] ?: $netshop->get_setting('DefaultPackageSize1')) ?: 10,
                    'width' => (int)($item['PackageSize2'] ?: $netshop->get_setting('DefaultPackageSize2')) ?: 10,
                    'height' => (int)($item['PackageSize3'] ?: $netshop->get_setting('DefaultPackageSize3')) ?: 10,
                    'weight' => round($item['Weight'] / 1000, 3) ?: 0.1,
                ),
            );
        }

        $estimation_params = array(
            'tariffId' => (int)$yandex_tariff_id,
            'cost' => array(
                'assessedValue' => $item_totals,
                'itemsSum' => $item_totals,
                'manualDeliveryForCustomer' => $delivery_cost_for_customer,
                'fullyPrepaid' => !$payment_on_delivery,
            ),
            'shipment' => array(
                'date' => $shipment_date,
            ),
        );

        if ($yandex_pickup_point_id) {
            $estimation_params['to']['pickupPointIds'] = array((int)$yandex_pickup_point_id);
        }

        $yandex_delivery_data = nc_array_value($this->get_yandex_delivery_variant_data($estimation_params), 0);

        if (!empty($yandex_delivery_data['pickupPointIds'])) {
            // у почтового отделения для Яндекс.Доставки также должен быть указан pickupPointId, у нас его нет
            $yandex_pickup_point_id = $yandex_delivery_data['pickupPointIds'][0];
        }

        // Создадим черновик заказа
        // @see: https://yandex.ru/dev/delivery-3/doc/dg/reference/post-orders.html#post-orders__input
        $data = array(
            'senderId' => (int)$this->get_setting('yandex_sender_id'),
            'externalId' => $order->get_id(),
            'deliveryType' => nc_array_value($this->yandex_delivery_types, $delivery_method->get('delivery_type')),
            'recipient' => array(
                'firstName' => $client_first_name,
                'middleName' => $client_middle_name,
                'lastName' => $client_last_name,
                'email' => $order['Email'],
                'fullAddress' => $order_full_address,
            ),
            'cost' => array(
                'manualDeliveryForCustomer' => $delivery_cost_for_customer,
                'paymentMethod' => $yandex_payment_method,
                'assessedValue' => $item_totals,
                'fullyPrepaid' => !$payment_on_delivery,
            ),
            'contacts' => array(
                0 => array(
                    'type' => 'RECIPIENT',
                    'phone' => $order['Phone'],
                    'firstName' => $client_first_name,
                    'middleName' => $client_middle_name,
                    'lastName' => $client_last_name
                )
            ),

            // данные о выбранном варианте доставки (ЯД проверяет совпадение значений с рассчитанным)
            'deliveryOption' => array(
                'tariffId' => $yandex_delivery_data['tariffId'],
                'delivery' => $yandex_delivery_data['cost']['delivery'],
                'deliveryForCustomer' => $yandex_delivery_data['cost']['deliveryForCustomer'],
                'partnerId' => $yandex_delivery_data['delivery']['partner']['id'],
                'calculatedDeliveryDateMin' => $yandex_delivery_data['delivery']['calculatedDeliveryDateMin'],
                'calculatedDeliveryDateMax' => $yandex_delivery_data['delivery']['calculatedDeliveryDateMax'],
                'services' => $yandex_delivery_data['services']
            ),

            // данные об отгрузке
            'shipment' => array(
                'type' => $yandex_delivery_data['shipments'][0]['type'],
                'date' => $shipment_date,
                'warehouseTo' => $yandex_delivery_data['shipments'][0]['warehouse']['id'],
                'partnerTo' => $yandex_delivery_data['shipments'][0]['partner']['id'],
            ),

            // данные о грузовых местах заказа
            'places' => array(
                0 => array(
                    'externalId' => $order->get_id(),
                    'dimensions' => array(
                        'length' => (int)$this->data['size1'],
                        'width' => (int)$this->data['size2'],
                        'height' => (int)$this->data['size3'],
                        'weight' => round($this->data['weight'] / 1000, 3),
                    ),
                    'items' => $yandex_order_items
                ),
            )
        );

        if ($yandex_pickup_point_id) {
            $data['recipient']['pickupPointId'] = (int)$yandex_pickup_point_id;
        }

        // Создадим черновик заказа
        $response = $this->make_yandex_api_request('POST', 'orders', $data);

        $order_id = null;

        if (!empty($response['status']) && nc_strtoupper($response['status']) === 'OK') {
            $order_id = $response['data']['order']['id'];
        }

        return $order_id;
    }

    /**
     * Разбор ФИО на составляющие
     * @return array [фамилия, имя, отчество]
     */
    protected function get_yandex_client_name_parts() {
        if ($this->data['last_name']) {
            return array(
                $this->data['last_name'],
                $this->data['first_name'],
                $this->data['middle_name'],
            );
        }

        $fio = preg_split('/\s+/', trim($this->data['full_name']), 3);
        return array(
            nc_array_value($fio, 0, ''),
            nc_array_value($fio, 1, ''),
            nc_array_value($fio, 2, ''),
        );
    }

    /**
     * Получение строки адреса заказа
     * @param nc_netshop_order $order
     * @return string
     */
    protected function get_yandex_full_address(nc_netshop_order $order) {
        // Данные из заказа
        $city = $order->get_location_name();

        // Части адреса
        $field_address = $this->data['to_address'];
        $field_street = $this->data['to_street'];
        $field_house = $this->data['to_house'];
        $field_housing = $this->data['to_housing'];
        $field_building = $this->data['to_building'];
        $field_flat = $this->data['to_flat'];

        $prefix = array(
            'to_house' => 'дом',
            'to_housing' => 'корпус',
            'to_building' => 'строение',
            'to_flat' => 'кв.',
        );

        $nc_core = nc_core::get_object();
        if (!$nc_core->NC_UNICODE) {
            $prefix = $nc_core->utf8->array_utf2win($prefix);
        }

        // Соберём воедино
        if (!empty($field_street) || !empty($field_house) || !empty($field_housing) || !empty($field_building) || !empty($field_flat)) {
            $local_address = array(
                $field_street,
                $field_house ? "$prefix[to_house] $field_house" : '',
                $field_housing ? "$prefix[to_housing] $field_housing" : '',
                $field_building ? "$prefix[to_building] $field_building" : '',
                $field_flat ? "$prefix[to_flat] $field_flat" : '',
            );
            $local_address = array_filter($local_address);
            $local_address = implode(', ', $local_address);
        } else {
            $local_address = trim($field_address);
        }

        return $local_address ? "$city, $local_address" : $city;
    }

    /**
     * Получение почтового индекса по адресу
     *
     * @param $full_address
     * @return string|null
     */
    protected function get_yandex_postal_code($full_address) {
        $index_response = $this->make_yandex_api_request('GET', 'location/postal-code', array('address' => $full_address));
        if ($index_response) {
            return $index_response[0]['postalCode'];
        }
        return null;
    }

    /**
     * Получение данных о доступных вариантах доставки
     *
     * @param array $additional_params дополнительные параметры запроса
     * @return array|false
     */
    protected function get_yandex_delivery_variant_data(array $additional_params = array()) {
        $to_city = isset($this->data['to_location_data']['name'])
            ? $this->data['to_location_data']['name']
            : $this->data['to_city'];

        $from_city = isset($this->data['from_location_data']['name'])
            ? $this->data['from_location_data']['name']
            : $this->data['from_city'];

        $postal_code = $this->data['to_zipcode'];
        if (!$postal_code && $this->data['to_location_data'] instanceof nc_netshop_location_data) {
            $postal_code = nc_netshop_location_provider_russianpost::get_first_postal_code($this->data['to_location_data']);
        }

        // @see: https://yandex.ru/dev/delivery-3/doc/dg/reference/put-delivery-options.html#put-delivery-options__input
        $request = array_replace_recursive(
            array(
                'senderId' => (int)$this->get_setting('yandex_sender_id'),
                'from' => array(
                    'location' => $from_city,
                ),
                'to' => array(
                    'location' => $to_city,
                    'postalCode' => $postal_code,
                ),
                'dimensions' => array(
                    'weight' => round($this->data['weight'] / 1000, 3),
                    'length' => (int)$this->data['size1'],
                    'width' => (int)$this->data['size2'],
                    'height' => (int)$this->data['size3'],
                ),
                'cost' => array(
                    'assessedValue' => $this->data['valuation'],
                    'itemsSum' => $this->data['valuation'],
                ),
            ),
            $additional_params
        );

        return $this->make_yandex_api_request('PUT', 'delivery-options', $request);
    }


    /**
     * Выполнение запроса к Яндекс.Доставке
     *
     * @param string $http_method
     * @param string $api_method
     * @param array $data
     * @return array|false
     */
    protected function make_yandex_api_request($http_method, $api_method, array $data) {
        $nc_core = nc_core::get_object();

        $token = $this->get_setting('yandex_oauth_token');
        if (!$token) {
            $this->show_message_for_supervisor(sprintf(NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_MISSING_SETTING, NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_OAUTH_TOKEN));
            return false;
        }

        $url = "https://api.delivery.yandex.ru/{$api_method}";
        $headers = array(
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => "OAuth {$token}",
        );

        if ($data && !$nc_core->NC_UNICODE) {
            $data = $nc_core->utf8->array_win2utf($data);
        }

        $response = $this->make_http_request($url, $data, $headers, $http_method);

        if (!$response) {
            $this->show_message_for_supervisor(NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_ERROR_NO_RESPONSE . " ($url)");
            return false;
        }

        $decoded_response = json_decode($response, true);

        // пустой массив не должен считаться ошибкой, отлавливаем только ошибки декодирования
        if ($decoded_response === null && json_last_error() !== JSON_ERROR_NONE) {
            $this->show_message_for_supervisor(NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_REMOTE_SERVER_RESPONSE);
            return false;
        }

        if (!$decoded_response) {
            return $decoded_response;
        }

        if (!$nc_core->NC_UNICODE) {
            $decoded_response = $nc_core->utf8->array_utf2win($decoded_response);
        }

        return $this->validate_yandex_api_response($decoded_response) ? $decoded_response : false;
    }

    /**
     * Валидация ответа от Яндекс.Доставки
     *
     * @param array $response
     * @return bool
     */
    protected function validate_yandex_api_response($response) {
        if (isset($response['error_message'])) {
            $explicit_error_message = $response['error_message'];
        } elseif (isset($response['message'])) {
            $explicit_error_message = $response['message'];
        } else {
            $explicit_error_message = 'unknown error';
        }

        if (isset($response['error'])) {
            $this->show_message_for_supervisor("$response[error]: $explicit_error_message");
            return false;
        }

        if (isset($response['error_code'])) {
            $this->show_message_for_supervisor("$response[error_code]: $explicit_error_message");
            return false;
        }

        if (isset($response['type'])) {
            switch ($response['type']) {
                case 'ACCESS_FORBIDDEN':
                case 'INVALID_OAUTH_TOKEN':
                case 'METHOD_NOT_ALLOWED':
                case 'RESOURCE_NOT_FOUND':
                    $this->show_message_for_supervisor("$response[type]: $explicit_error_message");
                    return false;
                default:
                    break;
            }
        }

        if (
            !empty($response['status'])
            && is_int($response['status'])
            && $response['status'] >= 400
            && $response['status'] < 600
        ) {
            $this->show_message_for_supervisor("Status Code $response[status]: $explicit_error_message");
            return false;
        }

        return true;
    }
}
