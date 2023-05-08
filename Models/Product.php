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

    /**
     * Calcola lo sconto se eta maggiore di 65
     * 
     * @param int $age eta
     */

    public function calcDiscount($age) {
        if(!is_numeric($age)) {
            throw new Exception('Inserire un numero valido');
        }

        if($age > 65) {
            return 'Hai diritto al 20% di sconto';
        } 
    }
}
