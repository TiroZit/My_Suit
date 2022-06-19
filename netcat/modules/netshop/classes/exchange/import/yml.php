<?php

class nc_netshop_exchange_import_yml extends nc_netshop_exchange_import {
    public function __construct($values = null) {
        parent::__construct($values);

        $this->property_field_title_prefixes = array(
            'param_',
        );
        $this->hard_matched_fields = array(
            'price' => 'Price',
            'currencyId' => 'Currency',
            'picture' => 'Image',
            'pictures' => 'Slider',
            'vendor' => 'Vendor',
            'typePrefix' => 'Type',
            'model' => 'Name',
            'description' => 'Details',
            'vendorCode' => 'Article',
            'parent_vendorCode' => nc_netshop_exchange_object::FAKE_FIELD_PARENT_FIELD,
        );
    }

    public static function get_acceptable_files_extensions() {
        return array_merge(parent::get_acceptable_files_extensions(), array('xml'));
    }

    protected function get_critical_file_size($extension) {
        $map = array(
            'xml' => nc_netshop_exchange_helper::mb_to_bytes(5)
        );
        return $map[$extension];
    }

    public function always_has_caption() {
        return true;
    }

    public function item_key_info($item_key) {
        $result = parent::item_key_info($item_key);
        return sprintf(NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_YML, $result['file_name'], $result['scope_name']);
    }

    public function get_data($file_path, $offset = null) {
        if (empty($file_path) || empty($offset) || !file_exists($file_path) || is_dir($file_path)) {
            return array();
        }
        $data = null;
        $cache_key = 'all_data';
        if ($this->cache->validate($cache_key)) {
            $data = $this->cache->get($cache_key);
        } else {
            $data = $this->parse_files();
            $this->cache->set($cache_key, $data);
        }
        $data = !empty($data[$file_path][$offset]) ? $data[$file_path][$offset] : null;
        if (empty($data)) {
            return array();
        }
        return array(
            'subdivision_parent_id' => $data['category_parent_id'],
            'subdivision_name' => $data['category_name'],
            'goods' => $data['goods'],
        );
    }

    public function prepare_items_for_matching() {
        $data = $this->parse_files();

        foreach ($data as $file_path => $file_data) {
            if (empty($file_data)) {
                continue;
            }

            foreach ($file_data as $category_id => $category_data) {
                // file_path|scope|scope_name
                $this->matching->add(implode('|', array($file_path, $category_id, $category_data['category_name_full'])));
            }
        }
    }

    /**
     * Парсит файлы и возвращает данные по ним
     * @return array
     */
    private function parse_files() {
        $result = array();

        $files_paths = $this->get_acceptable_files_paths();

        if (empty($files_paths)) {
            return $result;
        }

        foreach ($files_paths as $file_path) {
            $result[$file_path] = $this->parse_file($file_path);
        }

        return $result;
    }

    /**
     * Для каждого файла парсятся товары и категории
     * @param $file_path
     * @return array
     */
    private function parse_file($file_path) {
        $result = array();

        $xml = simplexml_load_file($file_path);

        $result['categories'] = $this->parse_file_categories($xml);
        $result['goods'] = $this->parse_file_goods($xml);

        // Обработанные данные
        $result = $this->process_data($result);

        return $result;
    }

    /**
     * Парсинг категорий из файла
     * @param $xml
     * @return array
     */
    private function parse_file_categories($xml) {
        $result = array();

        foreach ($xml->shop->categories->category as $cat) {
            $cat_id = (int)$cat['id'];
            $cat_parent_id = (int)$cat['parentId'];

            $result[$cat_id] = array(
                'name' => (string)$cat,
                'parent_id' => $cat_parent_id,
            );
        }

        return $result;
    }

    /**
     * Парсинг товаров из файла
     * @param $xml
     * @return array
     */
    private function parse_file_goods($xml) {
        $result = array();

        // Поля, игнорируемые при обработке (либо вообще, либо обрабатываемые вручную в коде)
        $fields_to_ignore = array(
            'category',
            'local_delivery_days',
            'local_delivery_cost',
            'delivery-options',
            'param',
            'picture',
        );

        $cache_parent_goods = array();

        /** @var SimpleXMLElement $item */
        foreach ($xml->shop->offers->offer as $item) {
            $arr = array();

            // Обработка полей "Изображения"
            if (!empty($item->picture)) {
                foreach ($item->picture as $key => $val) {
                    $val = (string)$val;

                    if (!array_key_exists('picture', $arr)) {
                        $arr['picture'] = $val;
                    } else {
                        $arr['pictures'] = empty($arr['pictures']) ? $val : $arr['pictures'] . '|' . $val;
                    }
                }
            }

            // Обработка полей "Параметры"
            if (!empty($item->param)) {
                foreach ($item->param as $key => $val) {
                    // Атрибут "Название" (преобразуем в ключевое слово)
                    $attr_name = trim($val['name'], ' -_');

                    // Атрибут "Единица измерения"
                    $attr_unit = $val['unit'];

                    $key = "{$key}_{$attr_name}";
                    $val = (string)$val . ' ' . $attr_unit;

                    $arr[$key] = $val;
                }
            }

            // Добавим все поля в массив
            foreach ($item as $key => $val) {
                if (in_array($key, $fields_to_ignore)) {
                    continue;
                }

                $val = (string)$val;

                $arr[$key] = $val;
            }

            // Добавим все атрибуты в массив
            foreach ($item->attributes() as $key => $val) {
                $key = "offer_{$key}";
                $val = (string)$val;

                $arr[$key] = $val;
            }

            // Обработаем поле offer_group_id (составим массив отношений для подчиненных товаров)
            $group_id = !empty($arr['offer_group_id']) ? $arr['offer_group_id'] : null;
            if ($group_id) {
                if (!array_key_exists($group_id, $cache_parent_goods)) {
                    // group_id => parent_good_id
                    $cache_parent_goods[$group_id] = $arr;
                } else {
                    // Заполним Id-родительского товара
                    $arr['parent_offer_id'] = $cache_parent_goods[$group_id]['offer_id'];
                    $arr['parent_vendorCode'] = $cache_parent_goods[$group_id]['vendorCode'];

                    // Удалим дублирующиеся в потомке родительские характеристики
                    foreach ($arr as $key => $val) {
                        if (in_array($key, array('offer_id', 'parent_offer_id', 'categoryId'))) {
                            continue;
                        }

                        if (!empty($cache_parent_goods[$group_id][$key]) && $val == $cache_parent_goods[$group_id][$key]) {
                            $arr[$key] = null;
                        }
                    }
                }
            }

            // Добавим данные по товару в массив
            $result[] = $arr;
        }

        return $result;
    }

    /**
     * Преобразование спарсенных данных в нужный для обмена вид
     * @param $data
     * @return array
     */
    private function process_data($data) {
        $result = array();

        // Id категорий, в которых есть товары
        $categories = array();
        foreach ($data['goods'] as $row) {
            $cat_id = $row['categoryId'];
            if (empty($cat_id)) {
                continue;
            }
            $categories[$cat_id] = '';
        }
        $categories = array_keys($categories);

        // Построим дерево только с ветвями, в которых есть товары
        $categories = $this->process_categories($categories, $data['categories']);

        // Соберем разделы, их имя, и товары внутри
        foreach ($categories as $cat_id) {
            $result[$cat_id] = array(
                'category_parent_id' => $data['categories'][$cat_id]['parent_id'],
                'category_name' => $data['categories'][$cat_id]['name'],
                'category_name_full' => '',
                'goods' => null,
            );

            // Товары в данной категории
            $goods = array();
            foreach ($data['goods'] as $good) {
                if ($good['categoryId'] != $cat_id) {
                    continue;
                }
                $goods[] = $good;
            }

            // Обработаем товары в категории
            if (count($goods)) {
                $result[$cat_id]['goods'] = $this->process_data_goods($goods);
            }

            // Полный путь до категории
            $tmp_name = array();
            $id = $cat_id;
            while ($id > 0) {
                $tmp_name[] = $data['categories'][$id]['name'];
                $id = $data['categories'][$id]['parent_id'];
            }
            $tmp_name = array_reverse($tmp_name);
            $tmp_name = implode(' / ', $tmp_name);
            $result[$cat_id]['category_name_full'] = $tmp_name;
        }

        return $result;
    }

    /**
     * Преобразование спарсенных данных о товарах в нужный для обмена вид
     * @param array[] $data
     * @return array
     */
    private function process_data_goods($data) {
        $result = array();

        // Для начала определим все возможные поля внутри файла
        $fields_names = array();
        foreach ($data as $row) {
            foreach ($row as $field_name => $col) {
                $fields_names[$field_name] = '';
            }
        }

        // Отсортируем элементы массива на основе массива полей
        $fields_names_orders = array(
            'offer_id',
            'parent_offer_id',
            'vendorCode',
            'parent_vendorCode',
            'model',
            'vendor',
            'typePrefix',
            'url',
            'price',
            'picture',
            'pictures',
            'description',
            'country_of_origin',
            'barcode',
        );
        $fields_names = array_keys($fields_names);

        usort($fields_names, function($a, $b) {
            $a_is_param = substr($a, 0, 6) == 'param_';
            $b_is_param = substr($b, 0, 6) == 'param_';

            if ((!$a_is_param && !$b_is_param) || ($a_is_param && $b_is_param)) {
                return strnatcmp($a, $b);
            }
            return $a_is_param ? 1 : -1;
        });

        $fields_names = array_flip($fields_names);
        $fields_names = array_replace(array_flip($fields_names_orders), $fields_names);
        $fields_names = array_keys($fields_names);

        // Заполним итоговый массив
        foreach ($data as $row) {
            $result_row = array();
            foreach ($fields_names as $field_name) {
                $result_row[$field_name] = !empty($row[$field_name]) ? $row[$field_name] : null;
            }
            $result[] = $result_row;
        }

        // Обработаем итоговый массив
        array_unshift($result, $fields_names);
        foreach ($result as $i => $row) {
            $result[$i] = array_values($row);
        }

        return $result;
    }

    /**
     * Возвращает ключи (или индексы) для полей файла.
     * @param $file_data
     * @return array
     */
    public function get_data_fields_keys($file_data) {
        return $file_data[0];
    }
}