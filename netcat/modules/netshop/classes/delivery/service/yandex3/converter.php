<?php

/**
 * Класс для конвертации данных от Яндекс.Доставки v3 в объекты netshop
 */
class nc_netshop_delivery_service_yandex3_converter {

    /** @var nc_netshop_delivery_service_yandex  */
    protected $service;

    /** @var  array */
    protected $data;

    /**
     *
     * @param nc_netshop_delivery_service_yandex3 $service
     * @param array $delivery_data
     */
    public function __construct(nc_netshop_delivery_service_yandex3 $service, array $delivery_data) {
        $this->service = $service;
        $this->data = $delivery_data;
    }

    /**
     * @param array $response
     * @return nc_netshop_delivery_method_collection
     */
    public function get_delivery_variants(array $response) {
        $variants = new nc_netshop_delivery_method_collection();

        //@see: https://yandex.ru/dev/delivery-3/doc/dg/reference/put-delivery-options.html#put-delivery-options__output
        foreach ($response as $data) {
            $delivery_type = $this->get_variant_delivery_type($data['delivery']);
            $min_days = date_diff(date_create('today'), date_create($data['delivery']['calculatedDeliveryDateMin']))->format('%d');
            $max_days = date_diff(date_create('today'), date_create($data['delivery']['calculatedDeliveryDateMax']))->format('%d');
            $variant = new nc_netshop_delivery_method_variant(array(
                'id' => $data['tariffId'],
                'name' => $data['delivery']['partner']['name'],
                'delivery_type' => $delivery_type,
                'description' => $this->get_variant_description($data),
                'extra_charge_absolute' => $data['cost']['deliveryForCustomer'],
                'minimum_delivery_days' => (int)$min_days,
                'maximum_delivery_days' => (int)$max_days,
            ));

            if ($delivery_type === nc_netshop_delivery::DELIVERY_TYPE_PICKUP && !empty($data['custom_pickup_data'])) {
                //@see: https://yandex.ru/dev/delivery-3/doc/dg/reference/put-pickup-points.html#put-pickup-points__output
                $variant->set_delivery_points($this->get_variant_delivery_points($data['custom_pickup_data'], $data['delivery']['partner']['name']));
            }

            $variant->set_payment_on_delivery_cost($this->get_variant_payment_on_delivery_cost($data));

            $variants->add($variant);
        }

        return $variants;
    }

    /**
     * @param array $data
     * @return string
     */
    protected function get_variant_delivery_type(array $data) {
        switch ($data['type']) {
            case 'PICKUP':  return nc_netshop_delivery::DELIVERY_TYPE_PICKUP;
            case 'POST':    return nc_netshop_delivery::DELIVERY_TYPE_POST;
            case 'COURIER':
            default:        return nc_netshop_delivery::DELIVERY_TYPE_COURIER;
        }
    }

    /**
     * @param $data
     * @return string
     */
    protected function get_variant_description(array $data) {
        //@see: https://yandex.ru/dev/delivery-3/doc/dg/reference/put-delivery-options.html#put-delivery-options__output
        $description = '';
        if ($data['delivery']['type'] === 'COURIER') {
            if (!empty($data['services'])) {
                foreach ($data['services'] as $service) {
                    if ($service['code'] === 'WAIT_20') {
                        $description .= NETCAT_MODULE_NETSHOP_DELIVERY_WITH_CHECK;
                    }
                }
            }

            if (isset($data['delivery']['courierSchedule']['schedule'])) {
                $schedule_strings = array();
                foreach ($data['delivery']['courierSchedule']['schedule'] as $schedule_data) {
                    $from = preg_replace('/^(\d+:\d+):\d+$/', '$1', $schedule_data['timeFrom']);
                    $to = preg_replace('/^(\d+:\d+):\d+$/', '$1', $schedule_data['timeTo']);
                    $schedule_strings[] = sprintf(NETCAT_MODULE_NETSHOP_COND_TIME_INTERVAL, $from, $to);
                }
                if ($schedule_strings) {
                    $description .= NETCAT_MODULE_NETSHOP_DELIVERY_COURIER_TIME . implode(', ', $schedule_strings);
                }
            }
        }

        return $description;
    }

    /**
     * @param array $data
     * @param $service_name
     * @return nc_netshop_delivery_point_collection
     * @throws nc_record_exception
     */
    protected function get_variant_delivery_points(array $data, $service_name) {
        $delivery_points = new nc_netshop_delivery_point_external_collection();
        foreach ($data as $point_data) {
            $delivery_points->add($this->get_delivery_point($point_data, $service_name));
        }
        return $delivery_points;
    }


    /**
     * @param array $point_data
     * @param $service_name
     * @return nc_netshop_delivery_point_external
     */
    protected function get_delivery_point(array $point_data, $service_name) {
        //@see: https://yandex.ru/dev/delivery-3/doc/dg/reference/put-pickup-points.html#put-pickup-points__output

        // часто у пунктов выдачи в качестве названия указано некрасивое «техническое» имя,
        // оно обычно содержит знак '_'; в этом случае подменяем на название службы доставки
        $name = strpos($point_data['name'], '_') !== false ? $service_name : $point_data['name'];

        $point = new nc_netshop_delivery_point_external(array(
            'id' => $point_data['id'],
            'name' => $name,
            'description' => $point_data['instruction'],
            'phones' => $this->get_delivery_point_phones_string($point_data['phones']),
            'location_name' => $point_data['address']['locality'],
            'address' => $point_data['address']['shortAddressString'],
            'latitude' => $point_data['address']['latitude'],
            'longitude' => $point_data['address']['longitude'],
            'payment_on_delivery_cash' => (bool)$point_data['supportedFeatures']['cash'],
            'payment_on_delivery_card' => (bool)$point_data['supportedFeatures']['card'],
            'enabled' => true,
        ));
        $point->set_schedule($this->get_delivery_schedule($point_data['schedule']));

        return $point;
    }

    /**
     * @param $phones
     * @return string
     */
    protected function get_delivery_point_phones_string($phones) {
        $result = array();
        foreach ((array)$phones as $phone) {
            $number = $phone['number'];
            $number = preg_replace('/^\+?([78])\D*(\d{3})\D*(\d{3})\D*(\d{2})\D*(\d{2})\b/', "+7 $2 $3-$4-$5", $number);
            if (trim($phone['internalNumber']) !== '') {
                $number .= ' ' . NETCAT_MODULE_NETSHOP_PHONE_EXTENSION . ' ' . $phone['internalNumber'];
            }

            $result[] = $number;
        }
        return implode(', ', array_unique($result));
    }

    /**
     * @param $interval_data
     * @return nc_netshop_delivery_schedule
     * @throws nc_record_exception
     */
    protected function get_delivery_schedule($interval_data) {
        $schedule = new nc_netshop_delivery_schedule();
        foreach ((array)$interval_data as $data) {
            $interval = new nc_netshop_delivery_interval(array(
                'time_from' => $data['from'],
                'time_to' => $data['to'],
                'day' . $data['day'] => true,
            ));
            $schedule->add($interval);
        }
        return $schedule;
    }

    /**
     * @param array $data
     * @return bool|int|float
     */
    protected function get_variant_payment_on_delivery_cost(array $data) {
        foreach ($data['services'] as $service) {
            if ($service['code'] === 'CASH_SERVICE') {
                if (!$this->service->get_setting('payment_charge')) {
                    // Вознаграждение за перечисление денежных средств включено в общую стоимость
                    return 0;
                }

                return $service['cost'];
            }
        }
        return false;
    }
}