<?php

class nc_netshop_goodslist_favorite extends nc_netshop_goodslist_base {

    protected $tablename = 'Netshop_FavoriteGoods';

    //--------------------------------------------------------------------------

    public function __construct(nc_netshop $netshop) {
        parent::__construct($netshop);
        $this->cache_all();
    }

    public function get_toggle_action_url($item_id, $class_id) {
        return $this->get_action_url(array(
            'type' => 'favorite',
            'action' => 'toggle',
            'item_id' => $item_id,
            'class_id' => $class_id,
        ));
    }

    public function get_add_action_url($item_id, $class_id, $return_url = null) {
        return $this->get_action_url(array(
            'type' => 'favorite',
            'action' => 'add',
            'item_id' => $item_id,
            'class_id' => $class_id,
            'return_url' => $return_url,
        ));
    }

    public function get_remove_action_url($item_id, $class_id, $return_url = null) {
        return $this->get_action_url(array(
            'type' => 'favorite',
            'action' => 'remove',
            'item_id' => $item_id,
            'class_id' => $class_id,
            'return_url' => $return_url,
        ));
    }

    public function get_clear_action_url($return_url = null) {
        return $this->get_action_url(array(
            'type' => 'favorite',
            'action' => 'clear',
            'return_url' => $return_url,
        ));
    }
}