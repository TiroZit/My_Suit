<?php

/**
 * Передача данных фильтра в query-части URL
 */
class nc_netshop_filter_driver_get extends nc_netshop_filter_driver {

    /**
     * Сбрасывает данные фильтра
     */
    public function remove_filter_data() {
        ob_end_clean();
        header("Location: " . $this->filter->get_base_page_url());
        die;
    }

    /**
     * @param array $fields
     * @return array
     */
    public function get_filter_data(array $fields) {
        $filter_values = array();
        $input = nc_core::get_object()->input;

        foreach ($fields as $field_name => $field_data) {
            $input_name = 'filter_' . $field_name;
            $value = $input->fetch_get_post($input_name);

            $unset_field_filter_data = (
                $value === null || // value is null
                $value === false || // no _GET/_POST
                (is_array($value) && !strlen(implode('', $value))) || // empty array
                (is_scalar($value) && !strlen($value)) // empty string
            );

            if (!$unset_field_filter_data) {
                $filter_values[$field_name] = $value;
            }
        }

        return $filter_values;
    }

}