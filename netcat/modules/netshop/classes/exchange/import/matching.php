<?php

class nc_netshop_exchange_import_matching {
    /**
     * Объекта обмена, для которого настраивается соответствие
     * @var nc_netshop_exchange_import
     */
    private $object;

    public function __construct(nc_netshop_exchange_import $object) {
        $this->object = $object;
    }

    /**
     * Начинает настройку обмена
     */
    public function start() {
        $this->finish();

        nc_netshop_exchange_session::set('matching_items', array());
        $this->object->prepare_items_for_matching();
        nc_netshop_exchange_session::set('matching_current', 1);
    }

    /**
     * Настройка обмена в процессе?
     * @return bool
     */
    public function in_process() {
        return nc_netshop_exchange_session::has('matching_items');
    }

    /**
     * Добавляем элемент для настройки
     * @param $item
     */
    public function add($item) {
        $items = nc_netshop_exchange_session::get('matching_items');
        $items[] = $item;
        nc_netshop_exchange_session::set('matching_items', $items);
    }

    /**
     * Возвращает текущий настраиваемый элемент
     * @return null
     */
    public function current() {
        $items = nc_netshop_exchange_session::get('matching_items');
        $index = nc_netshop_exchange_session::get('matching_current');
        if (empty($items)) {
            return null;
        }
        $value = nc_array_value($items, $index - 1);
        return $value ?: null;
    }

    /**
     * Возвращает следующий настраиваемый элемент и передвигает "указатель"
     * @return null
     */
    public function next() {
        $index = nc_netshop_exchange_session::get('matching_current');
        nc_netshop_exchange_session::set('matching_current', $index + 1);

        return $this->current();
    }

    /**
     * ID текущего настраиваемого элемента
     * @return int
     */
    public function index() {
        $index = nc_netshop_exchange_session::get('matching_current');
        return $index ?: 1;
    }

    /**
     * Сколько всего настраиваемых элементов
     * @return int
     */
    public function total() {
        $items = nc_netshop_exchange_session::get('matching_items');
        return count($items);
    }

    /**
     * Возвращает все элементы маппинга
     * @return array|null
     */
    public function get_all() {
        $items = nc_netshop_exchange_session::get('matching_items');
        if (empty($items)) {
            return array();
        }
        return $items;
    }

    /**
     * Устанавливает все элементы маппинга
     * @param $items
     */
    public function set_all($items) {
        nc_netshop_exchange_session::set('matching_items', array_values($items));
    }

    /**
     * Заканчивает настройку обмена
     */
    public function finish() {
        if (!$this->in_process()) {
            return;
        }

        nc_netshop_exchange_session::delete('matching_items');
        nc_netshop_exchange_session::delete('matching_current');
    }
}