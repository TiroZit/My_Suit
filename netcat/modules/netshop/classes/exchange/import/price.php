<?php

/**
 * Импорт из файлом с ценами и остатками
 * Class nc_netshop_exchange_import_price
 */
class nc_netshop_exchange_import_price extends nc_netshop_exchange_import {
    public static function get_acceptable_files_extensions() {
        return array_values(array_unique(array_merge(
                nc_netshop_exchange_import_csv::get_acceptable_files_extensions(),
                nc_netshop_exchange_import_xls::get_acceptable_files_extensions()
        )));
    }

    protected function get_critical_file_size($extension) {
        $excel_mb = 3;
        $map = array(
            'csv' => nc_netshop_exchange_helper::mb_to_bytes(30),
            'xls' => nc_netshop_exchange_helper::mb_to_bytes($excel_mb),
            'xlsx' => nc_netshop_exchange_helper::mb_to_bytes($excel_mb)
        );
        return $map[$extension];
    }

    /**
     * Возвращает фейковый компонент.
     * Такой финт ушами нужен для настройки сопоставления полей с колонками в файле.
     * @return array
     */
    public function get_components() {
        return array(
            0 => array(
                'name' => 'unnamed',
                'fields' => array(
                    0 => array(
                        'name' => nc_netshop_exchange_object::FAKE_FIELD_NO_FIELD,
                        'description' => '-- ' . NETCAT_MODULE_NETSHOP_EXCHANGE_FAKE_FIELD_NO_FIELD . ' --',
                        'type_of_data_id' => 0,
                        'format' => '',
                        'priority' => 0,
                    ),
                    1 => array(
                        'name' => 'Article',
                        'description' => NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_ARTICLE,
                        'type_of_data_id' => 1,
                        'format' => '',
                        'priority' => 1,
                    ),
                    2 => array(
                        'name' => 'Price',
                        'description' => NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_PRICE,
                        'type_of_data_id' => 7,
                        'format' => '',
                        'priority' => 2,
                    ),
                    3 => array(
                        'name' => 'StockUnits',
                        'description' => NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_STOCK_UNITS,
                        'type_of_data_id' => 2,
                        'format' => '',
                        'priority' => 3,
                    ),
                ),
            ),
        );
    }

    /**
     * @param string $file_path
     * @param null $offset
     * @return array
     * @throws nc_netshop_exchange_exception
     */
    public function get_data($file_path, $offset = null) {
        $id = $this->get_id();
        $type = nc_netshop_exchange_object::TYPE_IMPORT;
        $extension = pathinfo($file_path, PATHINFO_EXTENSION);
        $csv_extensions = nc_netshop_exchange_import_csv::get_acceptable_files_extensions();
        if (in_array($extension, $csv_extensions)) {
            $tmp = nc_netshop_exchange_import::by_id($id, $type, nc_netshop_exchange_import::FORMAT_CSV);
            return $tmp->get_data($file_path, $offset);
        }
        $xls_extensions = nc_netshop_exchange_import_xls::get_acceptable_files_extensions();
        if (in_array($extension, $xls_extensions)) {
            $tmp = nc_netshop_exchange_import::by_id($id, $type, nc_netshop_exchange_import::FORMAT_XLS);
            return $tmp->get_data($file_path, $offset);
        }
        return array();
    }

    /**
     * @throws nc_netshop_exchange_exception
     */
    public function prepare_items_for_matching() {
        $id = $this->get_id();
        $type = nc_netshop_exchange_object::TYPE_IMPORT;
        $tmp = nc_netshop_exchange_import::by_id($id, $type, nc_netshop_exchange_import::FORMAT_CSV);
        $tmp->prepare_items_for_matching();
        $tmp = nc_netshop_exchange_import::by_id($id, $type, nc_netshop_exchange_import::FORMAT_XLS);
        $tmp->prepare_items_for_matching();
    }

    public function item_key_info($item_key) {
        $result = parent::item_key_info($item_key);
        return sprintf(NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_PRICE, $result['file_name']);
    }

    protected function run_for_item($item, array $matching, nc_netshop_exchange_log $log) {
        $nc_core = nc_core::get_object();
        $db = nc_db();

        $item_key_data = nc_netshop_exchange_helper::item_key_to_data($item);
        $file_path = $item_key_data['file_path'];
        $scope = $item_key_data['scope'];
        $scope_name = $item_key_data['scope_name'];

        if (!file_exists($file_path)) {
            $log->add(array(
                'message' => NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_NOT_FOUND,
                'file_path' => $file_path,
                'type' => nc_netshop_exchange_log::TYPE_DANGER,
                'action' => nc_netshop_exchange_log::ACTION_ERROR,
            ));

            return;
        }

        $log->add(array(
            'message' => NETCAT_MODULE_NETSHOP_EXCHANGE_START_FILE_PROCESSING,
            'file_path' => $file_path . '|' . $scope_name,
        ));
        $file_data = $this->get_data($file_path, $scope);

        if (empty($file_data)) {
            $log->add(array(
                'message' =>  NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_IS_EMPTY,
                'file_path' => $file_path . '|' . $scope_name,
                'type' => nc_netshop_exchange_log::TYPE_DANGER,
            ));
        } else {
            $file_data = $file_data['goods'];
            $fields_keys = $this->get_data_fields_keys($file_data);
            $site_id = $nc_core->catalogue->id();

            if (empty($file_data)) {
                $log->add(array(
                    'message' =>  NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_NO_DATA_FOR_SUBDIVISION,
                    'file_path' => $file_path . '|' . $scope_name,
                    'type' => nc_netshop_exchange_log::TYPE_WARNING,
                ));
            } else {
                $fields = $matching['fields'];
                $skip_rows = $matching['skip_rows'];
                $index_field = $this->get_main_field_name();

                // Удалим заголовок если есть
                if ($skip_rows) {
                    $file_data = array_slice($file_data, $skip_rows);
                }
                // Поля компонента
                $component_fields = $this->get_components();
                $component_fields = $component_fields[0]['fields'];

                // Обработаем файл
                foreach ($file_data as $row) {
                    // Получим данные о полях в массив
                    $file_fields = array();

                    foreach ($row as $index => $col) {
                        // Ключ поля (для XLS и CSV - index поля, для YML - ключевое слово, напр. "name" или "vendor")
                        $field_key = $fields_keys[$index];
                        // Id поля в компоненте через ключевое слово поля
                        $field_id = !empty($fields[$field_key]) ? $fields[$field_key] : 0;
                        // Для поля не настроено соответствие
                        $field_matched = $field_id > 0 || $field_id == -2;
                        if (!$field_matched) {
                            continue;
                        }

                        $field_data = $component_fields[$field_id];

                        // Название поля (Name, Description, и т.д.)
                        $field_name = $field_data['name'];
                        // Значение поля
                        $field_value = $col;

                        // Поля, которые необходимо обрабатывать индивидуально
                        switch ($field_name) {
                            case 'Price':
                                $field_value = $this->convert_fieldtype_float($field_value, $field_name, $file_path, $scope_name, $log);
                                break;

                            case 'StockUnits':
                                $field_value = $this->convert_fieldtype_int($field_value, $field_name, $file_path, $scope_name, $log);
                                break;
                        }

                        $file_fields[$field_name] = $field_value;
                    }

                    // Артикул товара
                    $index_field_value = !empty($file_fields[$index_field]) ? $db->escape($file_fields[$index_field]) : null;
                    if (empty($index_field_value)) {
                        continue;
                    }
                    // Id компонента через поле для связи
                    $component_id = $this->component_id_from_index_field_value($index_field, $index_field_value);
                    if ($component_id === null) {
                        $log->add(array(
                            'message' => sprintf(NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_NOT_BEEN_FOUND, $index_field, $index_field_value),
                            'file_path' => $file_path . '|' . $scope_name,
                            'type' => nc_netshop_exchange_log::TYPE_DANGER,
                            'action' => nc_netshop_exchange_log::ACTION_OBJECT_NOT_UPDATED,
                        ));
                        continue;
                    }

                    // Запрос обновления полей в компоненте
                    unset($file_fields[$index_field]);
                    $query_set = array();
                    foreach ($file_fields as $field_name => $field_value) {
                        $field_value = $db->escape($field_value);
                        $query_set[] = " `{$field_name}`='{$field_value}' ";
                    }
                    $query_set = implode(',', $query_set);

                    // Данные объекта
                    $object_data = $db->get_row(
                        "SELECT `Message_ID`,`Subdivision_ID`,`Sub_Class_ID`
                        FROM `Message{$component_id}`
                        WHERE `{$index_field}`='{$index_field_value}'
                        LIMIT 1", ARRAY_A);
                    if (empty($object_data)) {
                        continue;
                    }
                    $message_id = $object_data['Message_ID'];
                    $subdivision_id = $object_data['Subdivision_ID'];
                    $sub_class_id = $object_data['Sub_Class_ID'];

                    $db->query(
                        "UPDATE `Message{$component_id}`
                            SET {$query_set}
                            WHERE `Message_ID`='{$message_id}'"
                    );

                    $nc_core->event->execute(nc_Event::AFTER_OBJECT_UPDATED, $site_id, $subdivision_id, $sub_class_id, $component_id, $message_id);

                    $log->add(array(
                        'message' => sprintf(NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_BEEN_UPDATED, $message_id, $index_field, $index_field_value),
                        'file_path' => $file_path . '|' . $scope_name,
                        'type' => nc_netshop_exchange_log::TYPE_SUCCESS,
                        'action' => nc_netshop_exchange_log::ACTION_OBJECT_UPDATED,
                    ));
                }
            }
        }

        $log->add(array(
            'message' => NETCAT_MODULE_NETSHOP_EXCHANGE_FINISH_FILE_PROCESSING,
            'file_path' => $file_path . '|' . $scope_name,
        ));
    }

    /**
     * Получаем Id компонента при помощи поля для связи
     * @param $index_field_name
     * @param $index_field_value
     * @return null|integer
     */
    public function component_id_from_index_field_value($index_field_name, $index_field_value) {
        $db = nc_db();

        static $cache = array();
        if (empty($cache)) {
            // Для всех артикулов во всех товарных компонентах построим индексный массив:
            // "значение поля для связи" => "id компонента"
            $good_components = nc_netshop_exchange_helper::get_goods_components_with_fields();
            $good_components_ids = array_keys($good_components);
            foreach ($good_components_ids as $good_component_id) {
                $index_field_values = $db->get_results("SELECT `{$index_field_name}` FROM `Message{$good_component_id}`", ARRAY_N);
                if (empty($index_field_values)) {
                    continue;
                }
                foreach ($index_field_values as $value) {
                    $value = $value[0];
                    if (!empty($cache[$value])) {
                        continue;
                    }
                    $cache[$value] = $good_component_id;
                }
            }
        }

        return !empty($cache[$index_field_value]) ? $cache[$index_field_value] : null;
    }

    public function get_data_fields_keys($file_data) {
        return array_keys($file_data[0]);
    }
}