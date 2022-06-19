<?php

/**
 * Поиск в индексе товаров.
 *
 * Входящие параметры:
 *   terms — символы для поиска
 *   limit — максимальное количество результатов
 *   user_id — идентификатор пользователя для расчета скидки 
 *   order_data (опционально) — информация о заказе (основные поля — f_*, корзина — элемент items)
 *   site_id
 */

$NETCAT_FOLDER = realpath(__DIR__ . '/../../../../../') . '/';
require_once $NETCAT_FOLDER . 'vars.inc.php';
require_once $ADMIN_FOLDER . 'function.inc.php';

$nc_core = nc_core::get_object();

$terms = $nc_core->input->fetch_get_post('terms');
$site_id = (int)$nc_core->input->fetch_get_post('site_id');
$user_id = (int)$nc_core->input->fetch_get_post('user_id');
$limit = $nc_core->input->fetch_get_post('limit');

$netshop = nc_netshop::get_instance($site_id);

$order_data = $nc_core->input->fetch_get_post('order_data');
if (is_array($order_data)) {
    $order = nc_netshop_order::from_post_data($order_data, $netshop);
    
    $context = $netshop->get_condition_context();
    $context->set_order($order);

    if ($user_id) {
        $context->set_user_id($user_id);
    }
}

$items = $netshop->itemindex->find($terms, $limit);

$properties = array(
    'Class_ID', 'Message_ID', 'RowID',
    'Article', 'FullName', 'URL',
    'OriginalPrice', 'OriginalPriceF',
    'ItemDiscount', 'Discounts',
    'ItemPrice', 'ItemPriceF',
    'Units',
);

if (!$netshop->get_setting('IgnoreStockUnitsValue')) {
    $properties[] = 'StockUnits';
}

$i = 0;
$result = array();

foreach ($items as $item) {
    foreach ($properties as $k) {
        $result[$i][$k] = $item[$k];
    }
    $i++;
}

header('Content-Type: application/json');
echo nc_array_json($result);
