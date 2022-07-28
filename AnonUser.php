<?php

require_once __DIR__ . '/User.php';

class AnonUser extends User {
    private $discount = 0;
}

?>