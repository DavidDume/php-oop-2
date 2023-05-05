<?php

class Product {
    public $title;
    public $price;

    public function __construct($_title, $_price) {
        $this->title = $_title;
        $this->price = $_price;
    }
}