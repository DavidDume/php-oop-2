<?php 
require_once __DIR__ . '/Product.php';

class Toy extends Product {
    public $color;

    public function __construct($_title, $_price, $_type, $_color) {
        parent::__construct($_title, $_price, $_type);
        $this->calories = $_color;
    }
}
