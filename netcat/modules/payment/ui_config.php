<?php

if (!class_exists("nc_System")) die("Unable to load file.");

class ui_config_module_payment extends ui_config_module {

    public function __construct($active_tab = 'admin', $toolbar_action = 'settings') {
        global $db;
        global $MODULE_FOLDER;

        parent::__construct('payment', $active_tab);

        }

}
?>