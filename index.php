<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Cat.php';

$cuccia = new Cat('cuccia', 12);
var_dump($cuccia);

echo $cuccia->getType();