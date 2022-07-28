<?php

class User {
    public $address;

    public function __construct($_address) {
        $this->address = $_address;
    }

    public function getInfo() {
        return "Your address is $this->address.";
    }
}

?>