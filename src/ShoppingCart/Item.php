<?php

namespace ShoppingCart;

class Item {

    private $item_name;
    private $item_price;

    public function __construct(string $item_name, string $item_price) {
        $this->item_name = $item_name;
        $this->item_price = $item_price;
    }

    public function getItemName() {
        return $this->item_name;
    }

    public function getItemPrice() {
        return $this->item_price;
    }

}
