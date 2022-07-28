<?php

require_once __DIR__ . '/FoodProduct.php';
require_once __DIR__ . '/ToyProduct.php';
require_once __DIR__ . '/BedProduct.php';
require_once __DIR__ . '/User.php';


// PROD 1
$dog_treats = new Food('dog-food', 'Royal Canin', 8, 30);
var_dump($dog_treats);

// PROD 2
$dog_toy = new Toy('dog-toy', 'Kong', 10);
var_dump($dog_toy);

// PROD 3
$dog_bed = new Bed('dog-bed', 'Feandrea', 30, 'small');
var_dump($dog_bed);



?>


