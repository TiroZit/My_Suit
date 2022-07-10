<?
    $netshop = nc_netshop::get_instance();
    $items = $netshop->cart->get_items();

    $postData = json_decode(file_get_contents('php://input'), true);
    $classId = $postData['classId'];
    $messageId = $postData['messageId'];

    if (!$classId || !$messageId) {
        echo json_encode([]);
        exit;
    }

    $totalCount = $netshop->cart->get_item_count(false);
    $totalCost = $netshop->cart->get_totals();
    $totalDiscount = 0;

    $preparedItems = [];
    $strCart = '';
    
    foreach ($items as $item) {
        $totalPrice = $item['Price'] * $item['Qty'];
        $totalDiscountPrice = null;
        $itemDiscount = 0;

        array_push($preparedItems, [
            'id' => $item['Message_ID'],
            'subId' => $item['Subdivision_ID'],
            'classId' => $item['Class_ID'],
            'subClassId' => $item['Sub_Class_ID'],
            'qty' => $item['Qty'],
            'totalPrice' => $totalPrice,
            'totalDiscountPrice' => $totalDiscountPrice
        ]);
        
        $strCart .= "${item[Class_ID]}:${item[Message_ID]}:${item[Qty]};";

        $discount += $itemDiscount;
    }

    $additionalDiscount = $netshop->cart->get_discount_sum();
    $discount = $discount + $additionalDiscount;

    $totalDiscount = $discount ? $totalCost - $discount : 0;
    $strCart = trim($strCart, ';');

    echo json_encode([
        'items' => $preparedItems,
        'discount' => round($discount, 2),
        'totalCost' => round($totalCost, 2),
        'totalCount' => round($totalCount, 2),
        'totalDiscount' => round($totalDiscount, 2),
        'strCart' => $strCart,
        'additionalDiscount' => $additionalDiscount,
    ]);
    exit;
?>