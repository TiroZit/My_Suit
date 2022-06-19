<?php

class nc_netshop_exchange_import_admin_controller extends nc_netshop_admin_controller {
    protected $ui_config_class = 'nc_netshop_exchange_import_admin_ui';

    protected function init() {
        parent::init();

        foreach (array('files', 'settings', 'format') as $action) {
            $this->bind($action, array('action', 'object_id'));
        }

        foreach (array('files_save', 'settings_save', 'logs_remove', 'reset_status') as $action) {
            $this->bind($action, array('object_id'));
        }

        $this->bind('logs', array('action', 'object_id', 'extra'));
    }

    /**
     * Получить view
     * @param $action
     * @param $object_id
     * @param bool $add_back_button
     * @return nc_ui_view
     */
    public function get_view($action, $object_id, $add_back_button = true) {
        $view = $this->view('object_import');

        $view->controller = 'exchange_import';
        $view->current_action = $action;
        $view->next_action = $view->current_action;
        $view->object_id = $object_id;

        if ($add_back_button) {
            $this->ui_config->actionButtons[] = array(
                "id" => "back",
                "caption" => NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_GO_BACK,
                "action" => "mainView.submitIframeForm('nc-netshop-exchange-form-back')",
                "align" => "left"
            );
        }

        return $view;
    }

    /**
     * Загрузка файлов
     * @param $action
     * @param $object_id
     * @return nc_ui_view
     */
    public function action_files($action, $object_id) {
        $object = nc_netshop_exchange_import::by_id($object_id);
        $nc_core = nc_core::get_object();

        // Список всех файлов и только нужных файлов
        $files_paths = $object->folder->get_files_paths();
        foreach ($files_paths as $i => $file_path) {
            if (is_dir($file_path)) {
                unset($files_paths[$i]);
            }
        }
        $acceptable_files_paths = $object->get_acceptable_files_paths();
        $files_paths = array_diff($files_paths, $acceptable_files_paths);

        $root_path = realpath($nc_core->DOCUMENT_ROOT . '/');

        if (count($files_paths)) {
            foreach ($files_paths as $i => $file) {
                $files_paths[$i] = str_replace(array($root_path, '\\'), array('', '/'), $file);
            }
            foreach ($acceptable_files_paths as $i => $file) {
                $acceptable_files_paths[$i] = str_replace(array($root_path, '\\'), array('', '/'), $file);
            }
        }

        $view = $this->get_view($action, $object_id);
        $view->object = $object;
        $view->files = $files_paths;
        $view->acceptable_files = $acceptable_files_paths;
        $view->next_action = $view->next_action . '_save';
        $view->upload_info = nc_netshop_exchange_helper::print_upload_info();
        $view->uploaded = nc_netshop_exchange_session::get('uploaded');
        nc_netshop_exchange_session::delete('uploaded');

        $this->ui_config->actionButtons[] = array(
            "id" => "submit_form",
            "caption" => NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_SUBMIT,
            "action" => "mainView.submitIframeForm()"
        );

        return $view;
    }

    /**
     * Сохранение файлов
     * @param $object_id
     */
    public function action_files_save($object_id) {
        $object = nc_netshop_exchange_import::by_id($object_id);
        $nc_core = nc_core::get_object();

        $uploaded_files = (count($_FILES['files']['error']) == 1 && $_FILES['files']['error'][0] == UPLOAD_ERR_NO_FILE) ? null : $_FILES['files'];
        $upload_file_url = $nc_core->input->fetch_post_get('file_url');

        $delete_old = $nc_core->input->fetch_post_get('delete_old');
        $delete_old = !empty($delete_old);

        // Загрузим и/или удалим файлы
        $uploaded = false;
        if (!empty($uploaded_files)) {
            $uploaded = $object->folder->upload_files_from_request_data($uploaded_files, $delete_old);
        } else if (!empty($upload_file_url)) {
            $uploaded = $object->folder->upload_file_from_url($upload_file_url, $delete_old);
        } else if ($delete_old) {
            $object->folder->clean();
        }

        nc_netshop_exchange_session::set('uploaded', $uploaded);

        $this->redirect_to_index_action('files', "&object_id={$object_id}");
    }

    /**
     * Настройки
     * @param $action
     * @param $object_id
     * @return nc_ui_view
     */
    public function action_settings($action, $object_id) {
        $object_id = (int)$object_id;
        $object = nc_netshop_exchange_object::by_id($object_id);

        $db = nc_db();

        $view = $this->get_view($action, $object_id);
        $view->object = $object;
        $view->next_action = $view->next_action . '_save';
        $view->saved = nc_netshop_exchange_session::get('saved');
        nc_netshop_exchange_session::delete('saved');

        // Данные о CRON задаче
        $cron_script_url = nc_netshop_exchange::get_cron_script_url();
        $cron_data = $db->get_row(
            "SELECT * FROM `CronTasks` WHERE `Cron_Script_URL` LIKE '{$cron_script_url}?id={$object_id}%'",
            ARRAY_A
        );
        $view->cron_minutes = $view->cron_hours = $view->cron_days = 0;
        if (!empty($cron_data)) {
            $view->cron_minutes = $cron_data['Cron_Minutes'];
            $view->cron_hours = $cron_data['Cron_Hours'];
            $view->cron_days = $cron_data['Cron_Days'];
        }

        $this->ui_config->actionButtons[] = array(
            "id" => "submit_form",
            "caption" => NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_SAVE,
            "action" => "mainView.submitIframeForm()"
        );

        return $view;
    }

    /**
     * Сохранение настроек
     * @param $object_id
     */
    public function action_settings_save($object_id) {
        $object_id = (int)$object_id;
        $nc_core = nc_core::get_object();
        $data = $nc_core->input->fetch_post('exchange');

        $db = nc_db();

        $object = nc_netshop_exchange_object::by_id($object_id);

        $object->set('automated_mode_enabled', !empty($data['automated_mode_enabled']) ? 1 : 0);

        $object_email = !empty($data['email_toggler']) && !empty($data['email']) ? $data['email'] : '';
        $object->set('email', $object_email);

        $object_email_reports_types = array(nc_netshop_exchange_object::EXCHANGE_REPORT_ALWAYS, nc_netshop_exchange_object::EXCHANGE_REPORT_ON_ERROR, nc_netshop_exchange_object::EXCHANGE_REPORT_NONE);
        $object_email_report =
            !empty($data['email_toggler']) &&
            !empty($data['report']) &&
            in_array($data['report'], $object_email_reports_types) ? $data['report'] : nc_netshop_exchange_object::EXCHANGE_REPORT_ALWAYS;
        $object->set('report', $object_email_report);

        $object_remote_file_url = null;
        if (!empty($data['remote_file_url_toggler'])) {
            $object_remote_file_url = !empty($data['remote_file_url']) ? $data['remote_file_url'] : null;
        }
        $object->set('remote_file_url', $object_remote_file_url);

        $object_run_interval_minutes = !empty($data['run_interval_toggler']) && !empty($data['run_interval_minutes']) ? (int)$data['run_interval_minutes'] : 0;
        $object_run_interval_minutes = $object_run_interval_minutes >= 0 ? $object_run_interval_minutes : 0;
        $object_run_interval_hours = !empty($data['run_interval_toggler']) && !empty($data['run_interval_hours']) ? (int)$data['run_interval_hours'] : 0;
        $object_run_interval_hours = $object_run_interval_hours >= 0 ? $object_run_interval_hours : 0;
        $object_run_interval_days = !empty($data['run_interval_toggler']) && !empty($data['run_interval_days']) ? (int)$data['run_interval_days'] : 0;
        $object_run_interval_days = $object_run_interval_days >= 0 ? $object_run_interval_days : 0;

        $cron_script_url = nc_netshop_exchange::get_cron_script_url();
        $cron_data = $db->get_row("SELECT * FROM `CronTasks` WHERE `Cron_Script_URL` LIKE '{$cron_script_url}?id={$object_id}%'", ARRAY_A);

        // Если данные поменялись
        if ($cron_data['Cron_Minutes'] != $object_run_interval_minutes ||
            $cron_data['Cron_Hours'] != $object_run_interval_hours ||
            $cron_data['Cron_Days'] != $object_run_interval_days) {
            // Удалим старую задачу
            $db->query("DELETE FROM `CronTasks` WHERE `Cron_Script_URL` LIKE '{$cron_script_url}?id={$object_id}%'");

            // Если данные ненулевые - установим новую
            if ($object_run_interval_minutes > 0 || $object_run_interval_hours > 0 || $object_run_interval_days > 0) {
                $object_cron_key = $object->get('cron_key');

                $db->query(
                    "INSERT INTO `CronTasks` SET
                    `Cron_Minutes`='{$object_run_interval_minutes}',
                    `Cron_Hours`='{$object_run_interval_hours}',
                    `Cron_Days`='{$object_run_interval_days}',
                    `Cron_Months`='0',
                    `Cron_Weekdays`='0',
                    `Cron_Script_URL`='{$cron_script_url}?id={$object_id}&key={$object_cron_key}'"
                );
            }
        }

        $object->save();

        nc_netshop_exchange_session::set('saved', true);

        $this->redirect_to_index_action('settings', "&object_id={$object_id}");
    }

    /**
     * Вывод логов
     * @param $action
     * @param $object_id
     * @param null $exchange_id
     * @return nc_ui_view
     */
    public function action_logs($action, $object_id, $exchange_id = null) {
        $object = nc_netshop_exchange_object::by_id($object_id);
        $log = new nc_netshop_exchange_log($object);

        $view = $this->get_view($action, $object_id, empty($exchange_id));

        if (empty($exchange_id)) {
            $logs = $log->load();
            $view->next_action = $view->next_action . '_remove';

            if (!empty($logs)) {
                $this->ui_config->actionButtons[] = array(
                    "id" => "submit_form",
                    "caption" => NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_REMOVE_SELECTED,
                    "action" => "mainView.submitIframeForm()",
                    "red_border" => true,
                );
            }
        } else {
            $logs = $log->load($exchange_id);

            $this->ui_config->actionButtons[] = array(
                "id" => "history_back",
                "caption" => NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_GO_BACK,
                "action" => "history.back(1)",
                "align" => "left"
            );
        }

        $view->object = $object;
        $view->logs = $logs;
        $view->log = $log;
        $view->exchange_id = $exchange_id;
        $view->removed = nc_netshop_exchange_session::get('removed');
        nc_netshop_exchange_session::delete('removed');

        return $view;
    }

    /**
     * Удаление логов
     * @param $object_id
     */
    public function action_logs_remove($object_id) {
        $nc_core = nc_core::get_object();
        $db = nc_db();

        // Id корневых логов для удаления
        $ids = $nc_core->input->fetch_post('id');
        if (!empty($ids)) {
            array_walk($ids, function(&$value) {
                $value = "'{$value}'";
            });
            $ids = implode(',', $ids);

            // Удалить логи
            $db->query("DELETE FROM `Netshop_ExchangeLog` WHERE `Object_Exchange_ID` IN ({$ids})");

            nc_netshop_exchange_session::set('removed', true);
        }

        $this->redirect_to_index_action('logs', "&object_id={$object_id}");
    }

    /**
     * Вывод формата обмена
     * @param $action
     * @param $object_id
     * @return nc_ui_view
     */
    public function action_format($action, $object_id) {
        $view = $this->get_view($action, $object_id);
        $object = nc_netshop_exchange_object::by_id($object_id);

        $view->has_items = true;
        $matching = $object->get('matching');
        if (empty($matching)) {
            $view->has_items = false;
            return $view;
        }

        $items = array();

        $nc_core = nc_core::get_object();
        $matching = json_decode($matching, true);
        foreach ($matching as $key => $val) {
            $item = array();
            $item_key = str_replace('\\', '/', $key);
            $item_key_data = nc_netshop_exchange_helper::item_key_to_data($item_key);
            $file_path = $item_key_data['file_path'];
            $file_name = pathinfo($file_path, PATHINFO_BASENAME);
            $item['name'] = implode(' : ', array($file_name, $item_key_data['scope_name']));

            $component = null;
            if (!empty($val['component_id'])) {
                $component = $nc_core->component->get_by_id($val['component_id']);
                $item['component'] = array(
                    'id' => $component['Class_ID'],
                    'group' => $component['Class_Group'],
                    'name' => $component['Class_Name'],
                    'keyword' => $component['Keyword'],
                );
            }

            $subdivision = null;
            if (!empty($val['subdivision_id'])) {
                $subdivision = $nc_core->subdivision->get_by_id($val['subdivision_id']);
                $item['subdivision'] = array(
                    'id' => $subdivision['Subdivision_ID'],
                    'name' => $subdivision['Subdivision_Name'],
                    'keyword' => $subdivision['EnglishName'],
                );
            }

            $sub_class_id = $nc_core->db->get_var(
                "SELECT `Sub_Class_ID`
                FROM `Sub_Class`
                WHERE `Subdivision_ID`='{$subdivision['Subdivision_ID']}'
                      AND
                      `Class_ID`='{$component['Class_ID']}'"
            );
            $sub_class = null;
            if (!empty($sub_class_id)) {
                $sub_class = $nc_core->sub_class->get_by_id($sub_class_id);
                $item['sub_class'] = array(
                    'id' => $sub_class['Sub_Class_ID'],
                    'name' => $sub_class['Sub_Class_Name'],
                    'keyword' => $sub_class['EnglishName'],
                );
            }

            $items[] = $item;
        }

        $view->items = $items;

        return $view;
    }

    /**
     * Сброс состояния обмена
     * @param $object_id
     * @throws
     */
    public function action_reset_status($object_id) {
        /** @var nc_netshop_exchange_object|nc_netshop_exchange_import $object */
        $object = nc_netshop_exchange_object::by_id($object_id);
        if ($object && $object->exchange_may_be_stuck()) {
            $object->handler->clean();
        }
        $this->redirect_to_index_action('settings', "&object_id={$object_id}");
    }
}
