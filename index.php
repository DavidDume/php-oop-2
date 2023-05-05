<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';


$prodotti = [
    new Food('croccantini', 12, 'cat', 100),
    new Food('carne', 20, 'dog', 300),
    new Toy('osso', 20, 'dog', "bianco")
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($prodotti as $prodotto) {
            echo "
            <div class='product'>
                <div class='text'>
                    <span>{$prodotto->title}</span>
                    <span>{$prodotto->price}$</span>
                </div>
                
                <p>{$prodotto->type}</p>
            </div>
            ";
        }
    ?>
</body>
</html>