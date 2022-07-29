<?php

$sizes = ['small', 'medium', 'large'];
$num   = rand(0, 2);
$size  = $sizes[$num];

var_dump($num);  
var_dump($sizes[$num]);  



require_once __DIR__ . '/FoodProduct.php';
require_once __DIR__ . '/ToyProduct.php';
require_once __DIR__ . '/BedProduct.php';
require_once __DIR__ . '/AnonUser.php';
require_once __DIR__ . '/SignedUser.php';

// PROD 1
$dog_treats = new Food('dog-food', 'Royal Canin', 8, 30);
$dog_treats->getSize();
var_dump($dog_treats);

// PROD 2
$dog_toy = new Toy('dog-toy', 'Kong', 10);
$dog_toy->getSize();
var_dump($dog_toy);

// PROD 3
$dog_bed = new Bed('dog-bed', 'Feandrea', 30, 'small');
$dog_bed->getSize();
var_dump($dog_bed);

// ANONYMUS USER 
$base_user = new AnonUser('Via Carlo Rusconi, 8, 00153 Roma', 10);

// SIGNED-UP USER 
$signed_user = new SignedUser('Via Gallia, 95, 00183 Roma', 1000, 'Carlo', 'Rossi', 'carlRoss@gmail.com');

// PURCHASE
$signed_user->addProduct($dog_treats);
$signed_user->addProduct($dog_toy);
$signed_user->addProduct($dog_bed);

$base_user->addProduct($dog_treats);

// PAYMENT
foreach(User::$collection as $user) {
    try{
        if($user->pay() === 'ok') {
            echo "<h1 style='color:green'> Thank you $user->name for shopping with us! </h1>";
        }
    } catch(Exception $e) {
        error_log($e->getMessage());
        echo "<h1 style='color:red'> L\'operazione non è andata a buon fine, controlla il saldo sulla tua carta e riprova. </h1>";
    }
}

?>
    



