<?php

require_once __DIR__ . '/User.php';

class SignedUser extends User {
    // override
    private $discount = 20;

    // override
    public function __construct($_address, $_balance, $_name, $_lastname, $_mail) {
        $this->address = $_address;
        $this->balance = $_balance;
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->mail = $_mail;

    }

    // override
    public function getInfo() {
        return "Address: $this->address - Name: $this->name - Lastname: $this->lastname - Mail: $this->mail";
    }
}

?>