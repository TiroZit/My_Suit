<?php

/**
 * Типовой контроллер страниц административного интерфейса модуля.
 */

abstract class nc_bills_admin_controller extends nc_ui_controller {

    protected $use_layout = true;

    protected function init() {
        $this->ui_config = new ui_config(array(
            'treeMode' => 'modules',
        ));
    }

    protected function after_action($result) {
        if ( ! $this->use_layout) {
            return $result;
        }

        BeginHtml(NETCAT_MODULE_BILLS_TITLE, '', '');
        echo $result;
        EndHtml();
        return '';
    }

    /**
     * @param string $html
     * @return DOMPDF
     * @throws DOMPDF_Exception
     */
    protected function get_rendered_dompdf($html) {
        require_once(nc_core::get_object()->ROOT_FOLDER . "require/lib/dompdf/dompdf_config.inc.php");
        $dompdf = new DOMPDF();
        $dompdf->set_option('enable_html5_parser', true);
        $dompdf->load_html($html);
        @$dompdf->render();
        return $dompdf;
    }

}