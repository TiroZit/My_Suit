<?php

class Common_Export_V1
{

  /**
   * @var nc_netshop
   */
  private $netshop;

    /**
     * @param nc_netshop $netshop
     * @param string $domain
     */
  public function __construct(nc_netshop $netshop, $domain)
  {
    $this->netshop = $netshop;
    $this->nc_core = nc_Core::get_object();
    $this->domain = $domain ?: $this->nc_core->catalogue->get_current('Domain') ?: $_SERVER['HTTP_HOST'];
    $this->_MaxNameLen = 20;
  }

  public function Export($place)
  {
    $class_name = "nc_netshop_market_" . $place;
    ${$place} = new $class_name($this->netshop);

    $ret_head = ${$place}->get_export_head($this->_MaxNameLen, $this->nc_core->NC_CHARSET, $this->domain);

    $bundles = ${$place}->get_bundles_list();
    if (is_array($bundles) && count($bundles) > 0) {
      foreach ($bundles as $bundle) {
        $bundle_id = $bundle['Bundle_ID'];

        $ret_offer = ${$place}->get_export_bundle_offers($bundle_id, $this->domain);
        $ret_offer_footer = ${$place}->get_export_footer();

        $file_name = nc_module_folder('netshop') . "export/{$place}/bundle$bundle_id.xml";
        $dir_name = dirname($file_name);

        if (!file_exists($dir_name)) {
          mkdir($dir_name, 0777);
        }
        if (!is_writable($dir_name)) {
          @chmod($dir_name, 0777);
        }

        if ($place === 'yandex') {
          if (!file_exists($dir_name . '/shops.dtd') && file_exists(nc_module_folder('netshop') . 'export/shops.dtd')) {
            @copy(nc_module_folder('netshop') . 'export/shops.dtd', $dir_name . '/shops.dtd');
          }
        }
        if (file_exists($file_name)) {
          @unlink($file_name);
        }
        $fp = fopen($file_name, "w+");
        foreach (array_merge($ret_head, $ret_offer, $ret_offer_footer) as $str) {
          fputs($fp, $str);
        }
        fclose($fp);
        @chmod($file_name, 0777);
      }
    }
  }

}
