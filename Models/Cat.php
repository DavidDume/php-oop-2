<?php
require_once __DIR__ . '/Product.php';

class Cat extends Product {
    public $type = 'cat';

    public function __construct($_title, $_price) {
        parent::__construct($_title, $_price);
    }

    public function getType() {
        return $this->type;
    }
}