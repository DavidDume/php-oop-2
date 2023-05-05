<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Type.php';

$cat = new Type('cat');

$cuccia = new Product('cuccia', 12, $cat);
var_dump($cuccia);
