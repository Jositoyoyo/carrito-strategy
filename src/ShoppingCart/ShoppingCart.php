<?php

namespace ShoppingCart;

include_once '../autoload.php';

class ShoppingCart {

    private $items;

    public function __construct() {
        session_start();
    }

    public function resetItems(): void {
        $_SESSION['cart'] = null;
    }

    public function addItem(Item $item): array {
        $item = array(
            $item->getItemName(),
            $item->getItemPrice()
        );
        $_SESSION['cart'][] = $item;
        return $item;
    }

    public function getItems(): array {
        if (!isset($_SESSION['cart'])) {
            return $_SESSION['cart'];
        }
        return array(null);
    }

    public function calculateTotal() {
        if (!isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $value) {
                
            }
        }
    }

    public function pay() {
        
    }

}
