<?php


class Product {
    public $title;
    public $price;
    public $type;

    public function __construct($_title, $_price, $_type) {
        $this->title = $_title;
        $this->price = $_price;
        $this->type = $_type;
    }
}
