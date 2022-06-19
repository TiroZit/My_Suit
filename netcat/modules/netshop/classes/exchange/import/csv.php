<?php

class nc_netshop_exchange_import_csv extends nc_netshop_exchange_import {
    const DELIMITER = ';';

    public static function get_acceptable_files_extensions() {
        return array_merge(parent::get_acceptable_files_extensions(), array('csv'));
    }

    protected function get_critical_file_size($extension) {
        $map = array(
            'csv' => nc_netshop_exchange_helper::mb_to_bytes(20)
        );
        return $map[$extension];
    }

    public function item_key_info($item_key) {
        $result = parent::item_key_info($item_key);
        return sprintf(NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV, $result['file_name']);
    }

    public function get_data($file_path, $offset = null) {
        if (empty($file_path) || !file_exists($file_path) || is_dir($file_path)) {
            return array();
        }
        $data = array();
        $handle = fopen($file_path, 'r');
        while (($row = fgetcsv($handle, 0, self::DELIMITER)) !== false) {
            $data[] = $row;
        }
        fclose($handle);
        $this->remove_last_column_if_empty($data);
        return array(
            'subdivision_parent_id' => null,
            'subdivision_name' => ucfirst(pathinfo($file_path, PATHINFO_FILENAME)),
            'goods' => $data,
        );
    }

    /**
     * Обрабатывает полученный из .csv массив, а именно - удаляем последнюю колонку, если в ней всё пусто
     * @param array $data
     */
    private function remove_last_column_if_empty(&$data) {
        if (empty($data)) {
            return;
        }
        $last_col_index = count($data[0]) - 1;
        foreach ($data as $row) {
            $cell = $row[$last_col_index];
            if (!empty($cell)) {
                return;
            }
        }
        foreach ($data as &$row) {
            unset($row[$last_col_index]);
        }
        unset($row);
    }

    public function prepare_items_for_matching() {
        $files_paths = $this->get_acceptable_files_paths();

        if (empty($files_paths)) {
            return;
        }

        foreach ($files_paths as $file_path) {
            $scope_name = mb_convert_case(pathinfo($file_path, PATHINFO_FILENAME), MB_CASE_TITLE, 'UTF-8');
            $this->matching->add(implode('|', array($file_path, null, $scope_name)));
        }
    }

    public function get_data_fields_keys($file_data) {
        return array_keys($file_data[0]);
    }
}