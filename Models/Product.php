<?php

require_once __DIR__ . '/Type.php';

class Product {
    public $title;
    public $price;
    public $type;

    public function __construct($_title, $_price, Type $_type) {
        $this->title = $_title;
        $this->price = $_price;
        $this->type = $_type;
    }
}