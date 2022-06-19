<?php

class nc_netshop_exchange_import_xls extends nc_netshop_exchange_import {
    public static function get_acceptable_files_extensions() {
        return array_merge(parent::get_acceptable_files_extensions(), array('xls','xlsx'));
    }

    protected function get_critical_file_size($extension) {
        $mb = 1;
        $map = array(
            'xls' => nc_netshop_exchange_helper::mb_to_bytes($mb),
            'xlsx' => nc_netshop_exchange_helper::mb_to_bytes($mb)
        );
        return $map[$extension];
    }

    /**
     * Подключаем библиотеку для работы с xls и xlsx файлами
     */
    private function require_lib() {
        if (class_exists('PHPExcel_IOFactory')) {
            return;
        }
        $nc_core = nc_core::get_object();
        $excel_folder = $nc_core->INCLUDE_FOLDER . 'lib/excel';
        require_once $excel_folder . '/PHPExcel.php';
        require_once $excel_folder . '/PHPExcel/Writer/Excel2007.php';
    }

    public function item_key_info($item_key) {
        $result = parent::item_key_info($item_key);
        return sprintf(NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_XLS, $result['file_name'], $result['scope_name']);
    }

    public function get_data($file_path, $offset = null) {
        $this->require_lib();

        if (empty($file_path) || empty($offset) || !file_exists($file_path) || is_dir($file_path)) {
            return array();
        }

        try {
            $php_excel_file_type = PHPExcel_IOFactory::identify($file_path);
            $php_excel_reader = PHPExcel_IOFactory::createReader($php_excel_file_type);
            $php_excel = $php_excel_reader->load($file_path);
        } catch(Exception $exception) {
            return array();
        }

        $sheet = $php_excel->getSheetByName($offset);

        if (empty($sheet)) {
            return array();
        }

        $cache_key = $file_path . '|' . $offset;
        if ($this->cache->validate($cache_key)) {
            $data = $this->cache->get($cache_key);
        } else {
            $data = $sheet->toArray();
            $data = $data ?: array();
            if (!empty($data)) {
                $this->prepare_data($data);
            }
            $this->cache->set($cache_key, $data);
        }

        $php_excel->disconnectWorksheets();
        unset($php_excel);

        return array(
            'subdivision_parent_id' => null,
            'subdivision_name' => $offset,
            'goods' => $data,
        );
    }

    /**
     * Иногда PHPExcel отдает массив, в котором есть пустые строки или столбцы.
     * Удалим их
     * @param $array
     */
    private function prepare_data(&$array) {
        // Проверим массив на пустоту (пустой лист библиотекой возвращается как "array(array())").
        if (count($array) == 1 && count($array[0]) == 1 && empty($array[0][0])) {
            $array = array();
            return;
        }

        // Удалим нулевые столбцы
        do {
            $last_col_has_non_empty_values = false;

            $cols_count = count($array[0]);
            if ($cols_count == 0) {
                break;
            }
            // Проверим, есть ли в последнем столбце хотя бы один ненулевой элемент
            foreach ($array as $row_index => $row) {
                if (!empty($row[$cols_count - 1])) {
                    $last_col_has_non_empty_values = true;
                    break;
                }
            }

            // Если весь столбец нулевой - удалим его
            if (!$last_col_has_non_empty_values) {
                foreach ($array as &$row) {
                    unset($row[$cols_count - 1]);
                }
                unset($row);
            }
        } while (!$last_col_has_non_empty_values);

        // Удалим нулевые строки
        do {
            $last_row_has_non_empty_values = false;

            $rows_count = count($array);
            if ($rows_count == 0) {
                break;
            }
            $cols_count = count($array[0]);
            if ($cols_count == 0) {
                break;
            }
            // Проверим, есть ли в последнем столбце хотя бы один ненулевой элемент
            for ($i=0; $i<$cols_count; $i++) {
                if (!empty($array[$rows_count - 1][$i])) {
                    $last_row_has_non_empty_values = true;
                    break;
                }
            }

            // Если весь столбец нулевой - удалим его
            if (!$last_row_has_non_empty_values) {
                unset($array[$rows_count - 1]);
            }
        } while (!$last_row_has_non_empty_values);
    }

    public function prepare_items_for_matching() {
        $this->require_lib();

        $files_paths = $this->get_acceptable_files_paths();

        if (empty($files_paths)) {
            return;
        }

        foreach ($files_paths as $file_path) {
            try {
                $php_excel_file_type = PHPExcel_IOFactory::identify($file_path);
                $php_excel_reader = PHPExcel_IOFactory::createReader($php_excel_file_type);
                $php_excel = $php_excel_reader->load($file_path);
            } catch(Exception $exception) {
                continue;
            }

            $sheets = $php_excel->getAllSheets();

            if (empty($sheets)) {
                continue;
            }

            foreach ($sheets as $sheet) {
                $title = $sheet->getTitle();

                // file_path|scope|scope_name
                $this->matching->add(implode('|', array($file_path, $title, $title)));
            }

            $php_excel->disconnectWorksheets();
            unset($php_excel);
        }
    }

    public function get_data_fields_keys($file_data) {
        return array_keys($file_data[0]);
    }
}