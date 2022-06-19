<?php

class nc_netshop_exchange_import_cml_importer {
    /* @var nc_netshop_exchange_import_cml $object */
    protected $object = null;

    public function __construct(nc_netshop_exchange_import_cml $object) {
        $this->object = $object;
    }

    public function save_to_file($file_name, $file_data) {
        // Папка обмена и путь до файла
        $folder = $this->object->folder->get_path();
        $file_path = $folder . '/' . $file_name;
        $file_folder = dirname($file_path);
        if (!file_exists($file_folder)) {
            mkdir($file_folder, nc_core::get_object()->DIRCHMOD, true);
        }

        // Записываем данные в файл
        $file_handle = fopen($file_path, 'a');
        if ($file_handle) {
            fwrite($file_handle, $file_data);
            fclose($file_handle);
            $file_size = filesize($file_path);
        } else {
            $file_size = false;
        }

        return array(
            'path' => $file_path,
            'size' => $file_size,
            'error' => $file_size === false,
        );
    }
}