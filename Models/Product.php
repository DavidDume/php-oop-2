<?php
require_once __DIR__ . '/../Traits/Weight.php';


class Product {

    use Weight;

    public $title;
    public $price;
    public $type;

    public function __construct($_title, $_price, $_type) {
        $this->title = $_title;
        $this->price = $_price;
        $this->type = $_type;
    }
}
