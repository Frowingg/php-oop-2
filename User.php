<?php

class User {
    public $address;

    public $balance = 0;

    protected $choosenProd = [];

    public function __construct($_address, $_balance) {
        $this->address = $_address;
        $this->balance = $_balance;
    }

    public function getInfo() {
        return "Your address is $this->address, your balance is $this->balance";
    }


    public function addProd($prod) {
        $this->choosenProd[] = $prod;

    }

    public function getChoosenProd() {
        return $this->choosenProd;
    }


    public function getFinalPrice() {
        $sum = 0;
        foreach($this->choosenProd as $product) {
            $sum += $product->cost;
        }

        $sum -= $sum * $this->discount / 100;
        
        return $sum;
    }

    public function makePayment() {
        $payCheck = $this->getFinalPrice();
        var_dump($paycheck);

        if($this->balance < $payCheck) {
            die('Insufficient balance');
        } else {
            // $this->balance -= $payCheck;
            return 'payment made';
        }
    }
}
?>