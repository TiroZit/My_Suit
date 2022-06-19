<?php

class nc_netshop_exchange_import_cache {
    /**
     * Объекта обмена, для которого настраивается соответствие
     * @var nc_netshop_exchange_import
     */
    protected $object;

    /**
     * Файл для хранения данных о кэше
     * @var nc_netshop_exchange_handler
     */
    protected $hander;

    /**
     * Папка для хранения кеша для заданного объекта импорта
     * @var nc_netshop_exchange_folder
     */
    public $folder;

    public function __construct(nc_netshop_exchange_import $object) {
        $this->object = $object;
        $cache_folder_path = nc_netshop_exchange_folder::get_common_folder_path() . "cache/" . $this->object->get('exchange_id');
        $this->folder = new nc_netshop_exchange_folder($cache_folder_path, $this->object);
        $this->folder->create();
        $this->hander = new nc_netshop_exchange_handler($cache_folder_path . '/info.json');
    }

    public function has($key) {
        return file_exists($this->get_file_path_from_key($key));
    }

    public function get($key) {
        $cache_file_path = $this->get_file_path_from_key($key);
        if (!file_exists($cache_file_path)) {
            return null;
        }
        $content = include $cache_file_path;
        return $content;
    }

    public function set($key, $value) {
        // Сохраним данные кэша в файл
        $cache_file_path = $this->get_file_path_from_key($key);
        if ($this->has($key)) {
            unlink($cache_file_path);
        }
        $content = '<' . '?php' . PHP_EOL . PHP_EOL . 'return ' . var_export($value, true) . ';';
        file_put_contents($cache_file_path, $content);
        // Установим информацию о содержимом папки обмена для валидации кэша
        $info = array();
        $info['files_count'] = $this->object->folder->get_files_count();
        $info['folder_hash'] = $this->object->folder->calculate_hash();
        $this->hander->set($key, $info);
        $this->hander->save();
    }

    public function validate($key) {
        // Есть инфа?
        $info = $this->hander->get($key);
        if (empty($info)) {
            return false;
        }
        // Есть ли файл кэша?
        if (!$this->has($key)) {
            return false;
        }
        // Есть ли файлы?
        if ($info['files_count'] < 0) {
            return false;
        }
        // Кол-во файлов совпадает?
        $files_count = $this->object->folder->get_files_count();
        if ($files_count != $info['files_count']) {
            return false;
        }
        // Совпадает ли хэш?
        if ($this->object->folder->calculate_hash() != $info['folder_hash']) {
            return false;
        }
        return true;
    }

    protected function get_file_name_from_key($key) {
        return sha1($key);
    }

    protected function get_file_path_from_key($key) {
        return $this->folder->get_path() . '/' . $this->get_file_name_from_key($key) . '.php';
    }
}