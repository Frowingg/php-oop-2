<?php

require_once __DIR__ . '/FoodProduct.php';
require_once __DIR__ . '/ToyProduct.php';
require_once __DIR__ . '/BedProduct.php';
require_once __DIR__ . '/AnonUser.php';
require_once __DIR__ . '/SignedUser.php';

// PROD 1
$dog_treats = new Food('dog-food', 'Royal Canin', 8, 30);
var_dump($dog_treats);

// PROD 2
$dog_toy = new Toy('dog-toy', 'Kong', 10);
var_dump($dog_toy);

// PROD 3
$dog_bed = new Bed('dog-bed', 'Feandrea', 30, 'small');
var_dump($dog_bed);

// ANONYMUS USER 
$base_user = new AnonUser('Via Carlo Rusconi, 8, 00153 Roma', 100);

// SIGNED-UP USER 
$signed_user = new SignedUser('Via Gallia, 95, 00183 Roma', 20, 'Carlo', 'Rossi', 'carlRoss@gmail.com');

// PURCHASE
$signed_user->addProduct($dog_treats);
$signed_user->addProduct($dog_toy);
$signed_user->addProduct($dog_bed);

$base_user->addProduct($dog_treats);
var_dump($base_user->balance);
// PAYMENT
foreach(User::$collection as $user) {

    if($user->pay() === 'ok') {
        var_dump($base_user->balance);
        echo "Thank you $user->name for shopping with us! \n";
    }
}

?>
    



