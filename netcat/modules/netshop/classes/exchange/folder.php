<?php

class nc_netshop_exchange_folder {
    protected $ignored_paths = array();
    protected $path = null;
    protected $object = null;

    /**
     * nc_netshop_exchange_folder constructor.
     * @param string $folder_path
     * @param nc_netshop_exchange_object $object
     * @param bool $create_immediately
     */
    public function __construct($folder_path, nc_netshop_exchange_object $object, $create_immediately = false) {
        $this->path = rtrim($folder_path, "\\/");
        $this->object = $object;
        if ($create_immediately) {
            $this->create();
        }
    }

    /**
     * Установить какие пути игнорировать при парсинге файловой структуры
     * @param array $file_paths
     */
    public function set_file_paths_to_ignore($file_paths) {
        $this->ignored_paths = $file_paths;
    }

    /**
     * Возвращает путь к папке
     * @return string
     */
    public function get_path() {
        return $this->path;
    }

    /**
     * Получить пути к файлам и папкам в папке
     * @param array $with_extensions - фильтрация по расширению файла
     * @return array
     */
    public function get_files_paths($with_extensions = array()) {
        if (!$this->exists()) {
            return array();
        }
        $folder = $this->get_path();
        if (!file_exists($folder)) {
            return array();
        }
        $rdi = new RecursiveDirectoryIterator($folder, RecursiveDirectoryIterator::SKIP_DOTS);
        if (iterator_count($rdi) === 0) {
            return array();
        }
        $files_paths = array();
        $rii = new RecursiveIteratorIterator($rdi, RecursiveIteratorIterator::SELF_FIRST);
        foreach ($rii as $file_info) {
            $files_paths[] = $file_info->getRealPath();
        }
        $files_paths = array_diff($files_paths, $this->ignored_paths);
        if ($with_extensions) {
            $files_paths = $this->filter_by_extensions($files_paths, $with_extensions);
        }
        return $files_paths;
    }

    /**
     * Возвращает кол-во файлов в папке
     * @param array $with_extensions
     * @return int
     */
    public function get_files_count($with_extensions = array()) {
        $files_paths = $this->get_files_paths($with_extensions);
        return count($files_paths);
    }

    /**
     * Фильтрация полученных путей, только файлы с нужными расширениями
     * @param $files_paths
     * @param $extensions
     * @return array
     */
    public function filter_by_extensions($files_paths, $extensions) {
        $result = array();
        foreach ($files_paths as $file_path) {
            $file_extension = pathinfo($file_path, PATHINFO_EXTENSION);
            if (in_array($file_extension, $extensions)) {
                $result[] = $file_path;
            }
        }
        return $result;
    }

    /**
     * Загрузка в папку файлов из $_FILES['param_name']
     * @param array $request_data
     * @param bool $delete_old
     * @return bool status
     */
    public function upload_files_from_request_data($request_data, $delete_old = true) {
        // Валидация присланных из запроса данных
        if (empty($request_data)) {
            return false;
        }
        if (count($request_data['error']) >= 1 && $request_data['error'][0] == UPLOAD_ERR_NO_FILE) {
            return false;
        }
        // Удалим старые файлы если необходимо
        if ($delete_old) {
            $this->clean();
        }
        // Загрузим файлы в папку обмена
        $folder_path = $this->get_path();
        for ($i = 0; $i < count($request_data['name']); $i++) {
            $file_name = $request_data['name'][$i];
            $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $file_path = $request_data['tmp_name'][$i];

            // Если не архив - переносим файлы в папку импорта
            if ($file_extension !== 'zip') {
                rename($file_path, $folder_path . '/' . $file_name);
            } else if (class_exists('ZipArchive')) {
                $zip = new ZipArchive();

                if ($zip->open($file_path) === true) {
                    $zip->extractTo($folder_path . '/');
                    $zip->close();
                }
            }
        }

        // Удалим неразрешённые файлы
        $files_paths = $this->get_files_paths();
        foreach ($files_paths as $file_path) {
            if (is_dir($file_path)) {
                continue;
            }
            $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
            // Не пропускаем архивы внутри архивов и исполняемые файлы
            $is_allowed_file_extension = !in_array($file_extension, array('zip', 'php'));
            // Не пропускаем мусор внутри архива, если архив был сделан из под MacOS
            $is_macos_specific = strpos($file_path, '__MACOSX') !== false;
            if ($is_allowed_file_extension && !$is_macos_specific) {
                continue;
            }
            unlink($file_path);
        }

        return true;
    }

    /**
     * Загрузка файлов по удалённому URL
     * @param $url
     * @param bool $delete_old
     * @return bool
     */
    public function upload_file_from_url($url, $delete_old = true) {
        if (empty($url)) {
            return false;
        }
        if (!strpos($url, '://')) {
            return false;
        }
        list($tmp_file_name) = explode('?', $url);
        $tmp_file_name = pathinfo($tmp_file_name, PATHINFO_BASENAME);
        $tmp_file_path = $this->object->tmp_folder->get_path() . '/' . $tmp_file_name;
        if (!copy($url, $tmp_file_path)) {
            return false;
        }
        $files = array(
            'name' => array($tmp_file_name),
            'tmp_name' => array($tmp_file_path),
        );
        return $this->upload_files_from_request_data($files, $delete_old);
    }

    /**
     * @return bool
     */
    public function exists() {
        return file_exists($this->get_path());
    }

    /**
     * Создание папки
     */
    public function create() {
        if ($this->exists()) {
            return;
        }
        // Создадим папку для файлов обмена, если всё ещё не создана
        mkdir($this->get_path(), nc_core::get_object()->DIRCHMOD, true);
    }

    /**
     * Очистка папки
     */
    public function clean() {
        if (!$this->exists()) {
            return;
        }
        $files_paths = $this->get_files_paths();
        if (empty($files_paths)) {
            return;
        }
        // Сортировка по длине содержимого (чтобы для начала удалились папки, затем файлы внутри папок)
        usort($files_paths, function ($a, $b) {
            return strlen($b) - strlen($a);
        });
        foreach ($files_paths as $file_path) {
            $function = is_dir($file_path) ? 'rmdir' : 'unlink';
            $function($file_path);
        }
    }

    /**
     * Удаление папки и всего содержимого
     */
    public function remove() {
        if (!$this->exists()) {
            return;
        }
        $this->clean();
        rmdir($this->get_path());
    }

    /**
     * Подсчёт хэша папки, учитывает содержимое файлов и папок и их названия
     * @return string
     */
    public function calculate_hash() {
        $hashes = 'empty';
        $files_paths = $this->get_files_paths();
        if ($files_paths) {
            foreach ($files_paths as $file_path) {
                $file_name = pathinfo($file_path, PATHINFO_BASENAME);
                $hashes .= $file_name . (is_file($file_path) ? md5_file($file_path) : '');
            }
        }
        return sha1($hashes);
    }

    /**
     * Получить путь к папке общей для всех обменов
     * @return string
     */
    public static function get_common_folder_path() {
        $nc_core = nc_core::get_object();
        return $nc_core->FILES_FOLDER . "netshop/exchange/";
    }

}