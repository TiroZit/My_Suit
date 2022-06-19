<?php

/**
 * Class nc_netshop_promotion_discount_item
 *
 * "discount on an item"
 */
abstract class nc_netshop_promotion_discount extends nc_netshop_promotion_deal {

    const TYPE_ABSOLUTE = 1;
    const TYPE_RELATIVE = 2;

    protected $primary_key = 'discount_id';

    protected $properties = array(
        'discount_id' => null,
        'catalogue_id' => null,
        'coupon_required' => false,
        'name' => null,
        'description' => null,
        'amount' => null,
        'amount_type' => self::TYPE_ABSOLUTE,
        'cumulative' => false,
        'condition' => null,
        'enabled' => true,
    );

    protected $table_name;
    protected $mapping = array(
        "_generate" => true
    );


    /**
     * @return string
     */
    public function get_formatted_amount() {
        $amount = $this->get('amount');
        if (strpos($amount, '.') !== false) {
            $amount = preg_replace('/0+$/', '', $amount);
            $amount = preg_replace('/\.$/', '', $amount);
        }
        return $amount;
    }

    /**
     * Возвращает отформатированное значение скидки (в процентах или абсолютное значение)
     * @param bool $no_nbsp не добавлять &nbsp; вместо пробелов
     * @return string
     */
    public function get_full_formatted_amount($no_nbsp = false) {
        if ($this->is_relative()) {
            return $this->get_formatted_amount() . "%";
        }
        else {
            return $this->get_netshop()->format_price($this->get('amount'), null, $no_nbsp);
        }
    }

    /**
     * @return bool
     */
    public function is_relative() {
        return $this->get('amount_type') == self::TYPE_RELATIVE;
    }

}