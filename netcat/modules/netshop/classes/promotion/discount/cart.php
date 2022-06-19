<?php

/**
 * Class nc_netshop_promotion_discount_cart
 *
 * "cart contents discount"
 */
class nc_netshop_promotion_discount_cart extends nc_netshop_promotion_discount {

    protected $primary_key = 'discount_id';

    protected $properties = array(
        'discount_id' => null,
        'catalogue_id' => null,
        'coupon_required' => false,
        'name' => null,
        'description' => null,
        'amount' => null,
        'amount_type' => nc_netshop_promotion_discount::TYPE_ABSOLUTE,
        'cumulative' => false,
        'condition' => null,
        'enabled' => true,
    );

    protected $table_name = 'Netshop_CartDiscount';
    protected $mapping = array(
        "_generate" => true
    );


    /**
     * @param nc_netshop_condition_context $context
     * @return float|int
     */
    public function get_discount_sum(nc_netshop_condition_context $context) {
        $sum = 0;

        if ($this->evaluate_conditions($context)) {
            $cart_total_price = $context->get_cart_contents()->sum('TotalPrice');
            $discount_amount = $this->get('amount');
            if ($this->is_relative()) {
                $sum = $this->round($cart_total_price * $discount_amount / 100);
            }
            else {
                // discount should’t be larger than the price itself
                $sum = min($cart_total_price, $discount_amount);
            }
            $min_price = $this->get_minimum_item_price();
            if ($min_price) {
                $num_items = $context->get_cart_contents()->sum('Qty');
                $max_discount = $cart_total_price - $num_items * $this->get_minimum_item_price();
                $sum = min($max_discount, $sum);
            }
        }

        return $sum;
    }

}