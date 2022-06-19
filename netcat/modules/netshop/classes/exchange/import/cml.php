<?php

/**
 * Импорт из CML
 */
class nc_netshop_exchange_import_cml extends nc_netshop_exchange_import {

    public function __construct($values = null) {
        parent::__construct($values);

        $this->property_field_title_prefixes = array(
            'Свойство - ',
            'Реквизит - ',
            'Характеристика - ',
        );
        $this->hard_matched_fields = array(
            'Ид' => 'ItemID',
            'ИдРодителя' => nc_netshop_exchange_object::FAKE_FIELD_PARENT_FIELD,
            'Наименование' => 'Name',
            'НаименованиеВарианта' => 'VariantName',
            'Артикул' => 'Article',
            'Описание' => 'Details',
            'Картинка' => 'Image',
            'Картинки' => 'Slider',
            'Количество' => 'StockUnits',
            'Налог - НДС' => 'VAT',
            'Изготовитель - Наименование' => 'Vendor',
        );
    }

    public static function get_acceptable_files_extensions() {
        return nc_netshop_exchange_import_yml::get_acceptable_files_extensions();
    }

    protected function get_critical_file_size($extension) {
        $map = array(
            'xml' => nc_netshop_exchange_helper::mb_to_bytes(5)
        );
        return $map[$extension];
    }

    public function get_main_field_name() {
        return 'ItemID';
    }

    public function get_main_field_description() {
        return NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_ITEM_ID;
    }

    public function always_has_caption() {
        return true;
    }

    protected function check_item_file_path($file_path) {
        return true;
    }

    public static function import_xml_files_count(nc_netshop_exchange_import_cml $exchange_object) {
        $files_paths = $exchange_object->folder->get_files_paths();
        if (count($files_paths) == 0) {
            return 0;
        }
        $counter = 0;
        foreach ($files_paths as $file_path) {
            $file_data = pathinfo($file_path);
            $prefix = 'import';
            $file_name_prefix = mb_substr($file_data['filename'], 0, mb_strlen($prefix));
            if ($file_name_prefix == $prefix && $file_data['extension'] === 'xml') {
                $counter++;
            }
        }
        return $counter;
    }

    protected function adjust_item_file_path($file_path) {
        return 'import_and_offers.xml';
    }

    public function has_acceptable_files() {
        $acceptable_files_paths = $this->get_acceptable_files_paths();

        // Сначала проверим количество файлов
        $acceptable_files_count = count($acceptable_files_paths);

        if ($acceptable_files_count == 0) {
            return false;
        }

        $acceptable_files_names = array();
        foreach ($acceptable_files_paths as $file_path) {
            $acceptable_files_names[] = pathinfo($file_path, PATHINFO_FILENAME);
        }

        // Если 2 и больше - то проверим их имена
        if ($acceptable_files_count >= 2) {
            // Должны быть имена import.xml и offers.xml
            if (in_array('import', $acceptable_files_names) && in_array('offers', $acceptable_files_names)) {
                return true;
            }
        }

        // Если файлов больше чем два, и нет основных файлов, то проверим, может быть файлы разбиты на части
        return in_array('import0_1', $acceptable_files_names) && in_array('offers0_1', $acceptable_files_names);
    }

    public function prepare_items_for_matching() {
        $data = $this->parse_files();
        $this->matching->finish();
        foreach ($data as $category_id => $category_data) {
            // file_path|scope|scope_name
            $this->matching->add(implode('|', array(null, $category_id, $category_data['category_name_full'])));
        }
    }

    public function item_key_info($item_key) {
        $result = parent::item_key_info($item_key);
        return sprintf(NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CML, $result['scope_name']);
    }

    public function get_data($file_path, $offset = null) {
        if (empty($offset)) {
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
        $data = !empty($data[$offset]) ? $data[$offset] : null;
        if (empty($data)) {
            return array();
        }
        return array(
            'subdivision_parent_id' => $data['category_parent_id'],
            'subdivision_name' => $data['category_name'],
            'goods' => $data['goods'],
        );
    }

    public function get_acceptable_files_paths() {
        $result = parent::get_acceptable_files_paths();
        sort($result);
        return $result;
    }

    /**
     * Парсинг файлов
     * @return array
     */
    private function parse_files() {
        $result = array();

        $files_paths = $this->get_acceptable_files_paths();

        if (empty($files_paths)) {
            return $result;
        }

        $import_files_paths = array();
        $offers_files_paths = array();

        foreach ($files_paths as $file_path) {
            $file_name = pathinfo($file_path, PATHINFO_FILENAME);

            if (strpos($file_name, 'import') !== false) {
                $import_files_paths[] = $file_path;
            } else if (strpos($file_name, 'offers') !== false) {
                $offers_files_paths[] = $file_path;
            }
        }

        // Максимальное кол-во файлов import или offers (файлов offers может быть больше чем import, и наоборот)
        $import_files_count = count($import_files_paths);
        $offers_files_count = count($offers_files_paths);
        $max_files_count = $import_files_count > $offers_files_count ? $import_files_count : $offers_files_count;

        for ($i = 0; $i < $max_files_count; $i++) {
            // Загрузим файл "import", если есть
            $import_xml = null;
            if ($i < $import_files_count) {
                $import_xml = simplexml_load_file($import_files_paths[$i]);
            }

            // Загрузим файл "offers", если есть
            $offers_xml = null;
            if ($i < $offers_files_count) {
                $offers_xml = simplexml_load_file($offers_files_paths[$i]);
            }

            // Парсим общие данные из обоих файлов
            $this->parse_common($import_xml, $result);
            $this->parse_common($offers_xml, $result);

            // Парсим каждый файл по отдельности
            $this->parse_import($import_xml, $result);
            $this->parse_offers($offers_xml, $result);

            // Удаляем объекты
            unset($import_xml);
            unset($offers_xml);
        }

        $this->process_data($result);

        return $result;
    }

    /**
     * Парсинг файла import.xml (или import_XXX.xml)
     * @param $xml
     * @param $result
     */
    private function parse_import($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        $this->parse_import_goods($xml->Каталог->Товары, $result);
    }

    /**
     * Парсинг файла offers.xml (или offers_XXX.xml)
     * @param $xml
     * @param $result
     */
    private function parse_offers($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        $this->parse_offers_pricetypes($xml->ПакетПредложений->ТипыЦен, $result);
        $this->parse_offers_storages($xml->ПакетПредложений->Склады, $result);
        $this->parse_offers_goods($xml->ПакетПредложений->Предложения, $result);
    }

    /**
     * Парсинг общих для обоих типов файлов данных
     * @param $xml
     * @param $result
     */
    private function parse_common($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        $this->parse_common_groups($xml->Классификатор->Группы, $result);
        $this->parse_common_properties($xml->Классификатор->Свойства, $result);
    }

    /**
     * Парсинг категорий
     * @param $xml
     * @param $result
     */
    private function parse_common_groups($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        $result['categories'] = $this->_parse_common_groups($xml);
    }

    /**
     * Парсинг категорий (рекурсивно)
     * @param $xml
     * @param array $result
     * @param null $parent_id
     * @return array
     */
    private function _parse_common_groups($xml, $result = array(), $parent_id = null) {
        if (empty($xml->Группа)) {
            return $result;
        }

        foreach ($xml->Группа as $xml_group) {
            $id = (string)$xml_group->Ид;
            $name = (string)$xml_group->Наименование;

            $result[$id] = array(
                'name' => $name,
                'parent_id' => $parent_id,
            );

            $result = $this->_parse_common_groups($xml_group->Группы, $result, $id);
        }

        return $result;
    }

    /**
     * Парсинг свойств
     * @param $xml
     * @param $result
     */
    private function parse_common_properties($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        foreach ($xml->Свойство as $xml_property) {
            $this->parse_common_property($xml_property, $result);
        }
    }

    /**
     * Парсинг свойства
     * @param $xml
     * @param $result
     */
    private function parse_common_property($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        $property_id = (string)$xml->Ид;

        if (!empty($result['properties'][$property_id])) {
            return;
        }

        // Название свойства
        $name = (string)$xml->Наименование;

        // Тип свойства
        $type = (string)$xml->ТипЗначений;
        switch ($type) {
            case 'Справочник':
                $type = 'set';
                break;

            default:
                $type = 'string';
        }

        // Добавим массив для свойства
        $result['properties'][$property_id] = array(
            'name' => $name,
            'type' => $type,
        );

        // В зависимости от типа по-разному обработаем значения
        switch ($type) {
            case 'set':
                $result['properties'][$property_id]['values'] = array();

                foreach ($xml->ВариантыЗначений->Справочник as $xml_val) {
                    $val_id = (string)$xml_val->ИдЗначения;
                    $val = (string)$xml_val->Значение;

                    $result['properties'][$property_id]['values'][$val_id] = $val;
                }

                break;
        }
    }

    /**
     * Парсинг товаров
     * @param $xml
     * @param $result
     */
    private function parse_import_goods($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        foreach ($xml->Товар as $xml_good) {
            $this->parse_import_good($xml_good, $result);
        }
    }

    /**
     * Парсинг товара
     * @param $xml
     * @param $result
     */
    private function parse_import_good($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        // Поля, обрабатываемые вручную
        $manual_processed_fields = array(
            // Преобразуем в 2 поля: "Картинка" (первая) и "Картинки" (остальные)
            'Картинка',
            // Берём одну из групп
            'Группы',
            // Парсим в общем коде, т.к. эти поля перекрываются вариантами товара
            'Наименование',
            'Артикул',
            // Особые (многомерные) поля
            'ЗначенияРеквизитов',
            'ЗначенияСвойств',
            'СтавкиНалогов',
            'Изготовитель',
        );

        $good_id = (string)$xml->Ид;
        $result['goods'][$good_id] = array();

        // Автоматически обрабатываемые элементы товара
        foreach ($xml as $key => $val) {
            if (in_array($key, $manual_processed_fields)) {
                continue;
            }
            $result['goods'][$good_id][$key] = (string)$val;
        }

        // Название варианта
        $result['goods'][$good_id]['НаименованиеВарианта'] = (string)$xml->Наименование;

        // Обработка полей "Изображения"
        if (!empty($xml->Картинка)) {
            foreach ($xml->Картинка as $xml_val) {
                $val = (string)$xml_val;

                if (!array_key_exists('Картинка', $result['goods'][$good_id])) {
                    $result['goods'][$good_id]['Картинка'] = $val;
                } else {
                    $result['goods'][$good_id]['Картинки'] = empty($result['goods'][$good_id]['Картинки']) ? $val : $result['goods'][$good_id]['Картинки'] . '|' . $val;
                }
            }
        }

        // Берём первый раздел (т.к. в неткате пока нельзя положить товар сразу в несколько разделов)
        $result['goods'][$good_id]['Группы'] = (string)$xml->Группы->Ид[0];

        // Парсим общие для двух файлов (import и offers) данные о товаре (свойства, характеристики, итд)
        $this->parse_good_common($xml, $good_id, $result);

        // Обработка полей "СтавкиНалогов"
        if (!empty($xml->СтавкиНалогов->СтавкаНалога)) {
            foreach ($xml->СтавкиНалогов->СтавкаНалога as $xml_nalog) {
                $name = (string)$xml_nalog->Наименование;
                $value = (string)$xml_nalog->Ставка;

                $result['goods'][$good_id]['Налог - ' . $name] = $value;
            }
        }

        // Обработка полей "Изготовитель"
        if (!empty($xml->Изготовитель)) {
            $result['goods'][$good_id]['Изготовитель - Ид'] = (string)$xml->Изготовитель->Ид;
            $result['goods'][$good_id]['Изготовитель - Наименование'] = (string)$xml->Изготовитель->Наименование;
            $result['goods'][$good_id]['Изготовитель - ОфициальноеНаименование'] = (string)$xml->Изготовитель->ОфициальноеНаименование;
        }
    }

    /**
     * Парсинг общих данных о товаре
     * @param $xml
     * @param $good_id
     * @param $result
     */
    private function parse_good_common($xml, $good_id, &$result) {
        foreach (array('Наименование', 'Артикул') as $property) {
            $value = (string)$xml->$property;
            if (strlen($value) || !isset($result['goods'][$good_id][$property])) {
                $result['goods'][$good_id][$property] = $value;
            }
        }

        $this->parse_good_common_properties($xml->ЗначенияСвойств, $good_id, $result);
        $this->parse_good_common_requisites($xml->ЗначенияРеквизитов, $good_id, $result);
        $this->parse_good_common_characteristics($xml->ХарактеристикиТовара, $good_id, $result);
    }

    /**
     * Парсинг общих данных о свойствах товара
     * @param $xml
     * @param $good_id
     * @param $result
     */
    private function parse_good_common_properties($xml, $good_id, &$result) {
        if (empty($xml)) {
            return;
        }

        foreach ($xml->ЗначенияСвойства as $xml_property) {
            $id = (string)$xml_property->Ид;
            $name = $result['properties'][$id]['name'];
            $value = (string)$xml_property->Значение;

            switch ($result['properties'][$id]['type']) {
                case 'set':
                    $value = $result['properties'][$id]['values'][$value];
                    break;
            }

            $result['goods'][$good_id]['Свойство - ' . $name] = $value;
        }
    }

    /**
     * Парсинг общих данных о реквизитах товара
     * @param $xml
     * @param $good_id
     * @param $result
     */
    private function parse_good_common_requisites($xml, $good_id, &$result) {
        if (empty($xml)) {
            return;
        }

        foreach ($xml->ЗначениеРеквизита as $xml_requisite) {
            $name = (string)$xml_requisite->Наименование;
            $value = (string)$xml_requisite->Значение;

            $result['goods'][$good_id]['Реквизит - ' . $name] = $value;
        }
    }

    /**
     * Парсинг общих данных о характеристиках товара
     * @param $xml
     * @param $good_id
     * @param $result
     */
    private function parse_good_common_characteristics($xml, $good_id, &$result) {
        if (empty($xml)) {
            return;
        }

        foreach ($xml->ХарактеристикаТовара as $xml_characteristic) {
            $name = (string)$xml_characteristic->Наименование;
            $value = (string)$xml_characteristic->Значение;

            $result['goods'][$good_id]['Характеристика - ' . $name] = $value;
        }
    }

    /**
     * Парсинг типов цен
     * @param $xml
     * @param $result
     */
    private function parse_offers_pricetypes($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        foreach ($xml->ТипЦены as $xml_pricetype) {
            $id = (string)$xml_pricetype->Ид;

            $result['price_types'][$id] = array(
                'name' => (string)$xml_pricetype->Наименование,
                'currency' => (string)$xml_pricetype->Валюта,
            );
        }
    }

    /**
     * Парсинг складов
     * @param $xml
     * @param $result
     */
    private function parse_offers_storages($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        foreach ($xml->Склад as $xml_storage) {
            $id = (string)$xml_storage->Ид;
            $name = (string)$xml_storage->Наименование;

            $result['storages'][$id] = $name;
        }
    }

    /**
     * Парсинг товаров из файлов "xml offers"
     * @param $xml
     * @param $result
     */
    private function parse_offers_goods($xml, &$result) {
        if (empty($xml)) {
            return;
        }

        $good_parents_ids = array();

        foreach ($xml->Предложение as $xml_good) {
            $this->parse_offers_good($xml_good, $result, $good_parents_ids);
        }

        // Удалим корневые товары (на основе которых были созданы варианты товаров)
        if (!empty($good_parents_ids)) {
            foreach ($good_parents_ids as $key => $tmp) {
                unset($result['goods'][$key]);
            }
        }
    }

    /**
     * Парсинг товара из файлов "xml offers"
     * @param $xml
     * @param $result
     * @param $good_parents_ids
     */
    private function parse_offers_good($xml, &$result, &$good_parents_ids) {
        if (empty($xml)) {
            return;
        }

        if (empty($xml->Цены->Цена)) {
            return;
        }

        // Поля, обрабатываемые вручную
        $manual_processed_fields = array(
            // Т.к. поле составное (через #)
            'Ид',
            // Берём одну из групп
            'Группы',
            // Парсим в общем коде, т.к. эти поля перекрываются вариантами товара
            'Наименование',
            'Артикул',
            // Особые (многомерные) поля
            'Цены',
            'ХарактеристикиТовара',
            'ЗначенияРеквизитов',
            'ЗначенияСвойств',
            'Комплектующие',
            'Склад',
        );

        // Id товара и Id его родителя
        $good_id = (string)$xml->Ид;
        $ids = explode('#', $good_id);
        $good_parent_id = $good_id = null;
        if (count($ids) == 1) {
            $good_id = $ids[0];
        } else {
            $good_parent_id = $ids[0];
            $good_id = $ids[1];
        }

        // Автоматически обрабатываемые элементы товара
        foreach ($xml as $key => $val) {
            if (in_array($key, $manual_processed_fields)) {
                continue;
            }
            $result['goods'][$good_id][$key] = (string)$val;
        }

        // Обработка полей "Ид" и "ИдРодителя"
        if (!empty($good_parent_id)) {
            // Скопируем данные родителя
            $result['goods'][$good_id] = array_merge(
                $result['goods'][$good_parent_id],
                $result['goods'][$good_id]
            );
            $result['goods'][$good_id]['Ид'] = $good_id;

            // Запомним Id родителя (им должен стать Id первого варианта товара)
            if (!array_key_exists($good_parent_id, $good_parents_ids)) {
                $good_parents_ids[$good_parent_id] = $good_id;
            } else {
                // Добавим родительский Id (Id первого товара из вариантов)
                $result['goods'][$good_id]['ИдРодителя'] = $good_parents_ids[$good_parent_id];
            }
        }

        // Обработка полей "Цена"
        foreach ($xml->Цены->Цена as $xml_price) {
            $price_id = (string)$xml_price->ИдТипаЦены;
            $common_name = 'Цена - ' . $result['price_types'][$price_id]['name'];

            foreach ($xml_price as $key => $val) {
                $val = (string)$val;

                $result['goods'][$good_id][$common_name . ' - ' . $key] = $val;
            }
        }

        // Обработка полей "Комплектующие"
        if (!empty($xml->Комплектующие->Комплектующее)) {
            foreach ($xml->Комплектующие->Комплектующее as $xml_item) {
                $id = (string)$xml_item->Ид;
                $name = (string)$xml_item->Наименование;
                $count = (string)$xml_item->Количество;

                $result['goods'][$good_id]['Комплектующее - ' . $name . ' - Ид'] = $id;
                $result['goods'][$good_id]['Комплектующее - ' . $name . ' - Наименование'] = $name;
                $result['goods'][$good_id]['Комплектующее - ' . $name . ' - Количество'] = $count;
            }
        }

        $this->parse_good_common($xml, $good_id, $result);
    }

    /**
     * Приведение данных в нужный вид
     * @param $result
     */
    private function process_data(&$result) {
        $result['result'] = array();

        $this->process_data_categories($result);
        $this->process_data_goods($result);

        $result = $result['result'];
    }

    /**
     * Приведение данных в нужный вид для категорий
     * @param $result
     */
    private function process_data_categories(&$result) {
        // Id категорий, в которых есть товары
        $categories = array();
        foreach ($result['goods'] as $row) {
            $category_id = $row['Группы'];
            if (empty($category_id)) {
                continue;
            }
            $categories[$category_id] = '';
        }
        $categories = array_keys($categories);

        // Построим дерево только с ветвями, в которых есть товары
        $categories = $this->process_categories($categories, $result['categories']);

        // Соберем разделы, их имя, и товары внутри
        foreach ($categories as $category_id) {
            $result['result'][$category_id] = array(
                'category_parent_id' => $result['categories'][$category_id]['parent_id'],
                'category_name' => $result['categories'][$category_id]['name'],
                'category_name_full' => '',
                'goods' => array(),
            );

            // Полный путь до категории
            $tmp_name = array();
            $id = $category_id;
            while ($id) {
                $tmp_name[] = $result['categories'][$id]['name'];
                $id = $result['categories'][$id]['parent_id'];
            }
            $tmp_name = array_reverse($tmp_name);
            $tmp_name = implode(' / ', $tmp_name);
            $result['result'][$category_id]['category_name_full'] = $tmp_name;
        }
    }

    /**
     * Приведение данных в нужный вид для товаров
     * @param $result
     */
    private function process_data_goods(&$result) {
        foreach ($result['result'] as $category_id => &$category_data) {
            // Товары в данной категории
            $goods = array();
            foreach ($result['goods'] as $good_id => $good) {
                if ($good['Группы'] != (string)$category_id) {
                    continue;
                }
                $goods[$good_id] = $good;
                unset($result['goods'][$good_id]);
            }

            // Обработаем товары в категории
            if (!empty($goods)) {
                $category_data['goods'] = $this->process_data_goods_array($goods);
            }
        }
        unset($category_data);
    }

    /**
     * Итоговое приведение данных в нужный вид для товаров
     * @param $goods
     * @return array
     */
    private function process_data_goods_array($goods) {
        // Для начала определим все возможные поля внутри текущей категории
        $fields_names = array();
        foreach ($goods as $good) {
            foreach ($good as $field_name => $col) {
                $fields_names[$field_name] = null;
            }
        }

        // Отсортируем элементы массива на основе массива полей
        $field_name_stock_units = 'Количество';
        $fields_names_orders = array(
            'Ид',
            'ИдРодителя',
            'Наименование',
            'НаименованиеВарианта',
            'Артикул',
            'Описание',
            'Картинка',
            'Картинки',
            'БазоваяЕдиница',
            $field_name_stock_units,
        );
        $fields_names = array_keys($fields_names);
        $fields_names = array_flip($fields_names);
        $fields_names = array_replace(array_flip($fields_names_orders), $fields_names);
        $fields_names = array_keys($fields_names);

        // Поля, которые не должны наследовать значения из родителей
        $field_names_nest_exclusions = array($field_name_stock_units);

        $result = array();
        // Заполним итоговый массив
        foreach ($goods as $good) {
            $good_parent_id = !empty($good['ИдРодителя']) ? $good['ИдРодителя'] : null;
            $result_row = array();
            $has_parent = !empty($good_parent_id);
            foreach ($fields_names as $field_name) {
                // Значение поля у товара
                $value = !empty($good[$field_name]) ? $good[$field_name] : null;
                // Значение поля у родителя данного товара
                $parent_value = null;
                if ($has_parent) {
                    $parent_value = !empty($goods[$good_parent_id][$field_name]) ?
                        $goods[$good_parent_id][$field_name] : null;
                }
                // Наследование значения у дочернего товара предполагает NULL значение поля (тогда будет браться из родителя)
                if ($has_parent && $value == $parent_value && !in_array($field_name, $field_names_nest_exclusions)) {
                    $value = null;
                }
                $result_row[$field_name] = $value;
            }
            // Обработка для поля "Наименование" и "НаименованиеВарианта"
            $tmp = $result_row['Наименование'];
            $result_row['Наименование'] = $result_row['НаименованиеВарианта'];
            $result_row['НаименованиеВарианта'] = $tmp;

            if ($result_row['Наименование'] == $result_row['НаименованиеВарианта']) {
                $result_row['НаименованиеВарианта'] = null;
            }

            $result[] = $result_row;
        }

        // Обработаем итоговый массив
        array_unshift($result, $fields_names);
        foreach ($result as &$row) {
            $row = array_values($row);
        }
        unset($row);

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