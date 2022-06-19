<?php

abstract class nc_netshop_promotion_deal extends nc_netshop_record_conditional {

    /**
      * Возвращает объект nc_promotion_deal_* с указанным ID или null, если такого
      * не найдено
      *
      * @param $deal_type
      * @param $deal_id
      * @return nc_netshop_promotion_deal|null
      */
    static public function by_id($deal_type, $deal_id) {
        if (!preg_match("/^\w+$/", $deal_type)) {
            return null;
        }
        $deal_class = "nc_netshop_promotion_" . $deal_type;
        if (@class_exists($deal_class)) {
            /** @var nc_netshop_promotion_deal $deal */
            $deal = new $deal_class();
            try {
                return $deal->load($deal_id);
            }
            catch (Exception $e) {}
        }
        return null;
    }

    /**
     * @return nc_netshop
     */
    protected function get_netshop() {
        return nc_netshop::get_instance($this->get('catalogue_id'));
    }

    /**
     * @return float|int
     */
    protected function get_minimum_item_price() {
        $netshop = $this->get_netshop();
        if ($netshop->get_setting('AllowZeroPrice')) {
            return 0;
        }
        return pow(10, -1 * $netshop->get_setting('CurrencyDetails', $netshop->get_setting('DefaultCurrencyID'), 'Decimals'));
    }

    /**
     * @param $value
     * @return int|float
     */
    protected function round($value) {
        return $this->get_netshop()->round_price($value);
    }

    public function get_deal_type() {
        return str_replace("nc_netshop_promotion_", "", get_class($this));
    }

    /**
     * @return $this
     */
    public function delete() {
        if ($this->get_id()) {
            nc_db()->query("DELETE FROM `Netshop_Coupon`
                             WHERE `Deal_Type` = " . $this->escape_value($this->get_deal_type()) . "
                               AND `Deal_ID` = " . $this->escape_value($this->get_id()));
        }
        return parent::delete();
    }

}