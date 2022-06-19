<?php

class nc_netshop_exchange_import_admin_ui extends nc_netshop_admin_ui {

    /**
     * @param $catalogue_id
     * @param string $current_action
     */
    public function __construct($catalogue_id, $current_action = "files") {
        $nc_core = nc_core::get_object();
        $object_id = $nc_core->input->fetch_post_get('object_id');
        $object = nc_netshop_exchange_object::by_id($object_id);
        $object_name = $object->get('name');

        parent::__construct('exchange_import', NETCAT_MODULE_NETSHOP_EXCHANGE . " &laquo;{$object_name}&raquo;");

        $this->catalogue_id = $catalogue_id;
        $this->activeTab = $current_action;
    }

    /**
     * Сгенерировать табы непосредственно перед выводом (потому что catalogue_id
     * может поменяться в процессе выполнения action)
     *
     * @todo Перенести обратно в __construct после создания универсального интерфейса  для посайтового управления модулями.
     *
     * @return string
     */
    public function to_json() {
        $nc_core = nc_core::get_object();

        $current_action = $this->activeTab;
        $object_id = $nc_core->input->fetch_post_get('object_id');
        $object = nc_netshop_exchange_object::by_id($object_id);
        $extra = $nc_core->input->fetch_post_get('extra');
        $extra = $extra ?: 0;

        if ($this->locationHash == 'module.netshop.exchange_import') {
            $params = array($current_action, $object_id);
            if ($current_action == 'logs') {
                $params[] = $extra;
            }
            $params = implode(',', $params);
            $this->locationHash = "module.netshop.exchange.import({$params})";
        }

        $this->tabs = array();
        $this->tabs[] = array(
            'id'       => 'settings',
            'caption'  => NETCAT_MODULE_NETSHOP_SETTINGS,
            'location' => "module.netshop.exchange.import(settings,{$object_id})",
            'group'    => "admin",
        );
        if ($object->get_mode() == nc_netshop_exchange_import::MODE_MANUAL) {
            $this->tabs[] = array(
                'id'       => 'files',
                'caption'  => NETCAT_MODULE_NETSHOP_EXCHANGE_FILES,
                'location' => "module.netshop.exchange.import(files,{$object_id})",
                'group'    => "admin",
            );
        }
        $this->tabs[] = array(
            'id'       => 'logs',
            'caption'  => NETCAT_MODULE_NETSHOP_EXCHANGE_LOGS,
            'location' => "module.netshop.exchange.import(logs,{$object_id},{$extra})",
            'group'    => "admin",
        );
        if ($object['format'] != nc_netshop_exchange_import::FORMAT_PRICE) {
            $this->tabs[] = array(
                'id'       => 'format',
                'caption'  => NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_TYPE_AND_FORMAT,
                'location' => "module.netshop.exchange.import(format,{$object_id})",
                'group'    => "admin",
            );
        }

        return parent::to_json();
    }

}