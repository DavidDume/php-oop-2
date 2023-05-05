<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';



$croccantini = new Food('croccantini', 12, 'cat', 100);
var_dump($croccantini);

echo "<p>" . $croccantini->title . "</p>";