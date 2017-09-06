<?php

class Item {

    private $itemName;

    public function __construct($itemName) {
        $this->itemName = $itemName;
    }

    public function getItemName() {
        return $this->itemName;
    }

    /*public function viewItem() {
        echo "Item Name: $this->itemName<br>Item Price: number_format($this->itemPrice)<br>";
    }

    public function listItem() {
        $price = number_format($this->itemPrice, 2, ".", ",");
        return "Item Name: $this->itemName - Item Price: $price<br>";
    }*/

}


?>