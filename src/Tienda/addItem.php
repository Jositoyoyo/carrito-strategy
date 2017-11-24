<?php

namespace Tienda;

include_once '../autoload.php';

use ShoppingCart\Item;

$item_name = $_POST['item-name'];
$item_price = $_POST['item-price'];


$shoppingCart = new \ShoppingCart\ShoppingCart();
$shoppingCart->addItem(new Item($item_name, $item_price));
header('location: tienda.php');

?>

