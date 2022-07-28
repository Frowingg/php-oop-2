<?php

require_once __DIR__ . '/User.php';

class AnonUser extends User {
    public $discount = 0;
}

?>