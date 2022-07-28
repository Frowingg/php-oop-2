<?php

require_once __DIR__ . '/User.php';

class AnonUser extends User {
    // override
    public $discount = 0;
}

?>