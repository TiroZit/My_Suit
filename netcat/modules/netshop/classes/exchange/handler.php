<?php

class nc_netshop_exchange_handler {
    protected $file_path;
    protected $data;

    public function __construct($file_path) {
        $this->file_path = $file_path;
        if (file_exists($this->file_path)) {
            $this->data = file_get_contents($this->file_path);
            $this->data = json_decode($this->data, true);
        } else {
            $this->clean();
        }
    }

    public function get_path() {
        return $this->file_path;
    }

    public function get($key, $default = null) {
        return isset($this->data[$key]) ? $this->data[$key] : $default;
    }

    public function set($key, $value) {
        $this->data[$key] = $value;
    }

    public function save() {
        file_put_contents($this->get_path(), nc_array_json($this->data));
    }

    public function clean() {
        $this->data = array();
        $this->save();
    }

    public function remove() {
        unlink($this->get_path());
    }
}