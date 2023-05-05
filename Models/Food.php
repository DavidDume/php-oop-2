<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product {
    public $calories;

    public function __construct($_title, $_price, $_type, $_calories) {
        parent::__construct($_title, $_price, $_type);
        $this->calories = $_calories;
    }
}
