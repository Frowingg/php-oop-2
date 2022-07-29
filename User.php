<?php

class User {
    public $address;

    public $balance = 0;

    protected $choosenProd = [];

    public static $collection = array();

    public function __construct($_address, $_balance) {
        $this->address = $_address;
        $this->balance = $_balance;
        self::$collection[] = $this;
    }

    public function getInfo() {
        return "Your address is $this->address, your balance is $this->balance";
    }

    public function addProduct($product) {
        $this->$choosenProd[] = $product;
    }

    public function getchoosenProd() {
        return $this->$choosenProd;
    }

    public function paycheck() {

        $sum = 0;
        foreach($this->$choosenProd as $product) {
            $sum += $product->cost;
        }

        // DISCOUNT
        $sum -= $sum * $this->discount / 100;
        return $sum;
    }

    public function pay() {
        $totalSum = $this->paycheck();
        $this->balance -= $totalSum;

        if($this->balance < $totalSum) {
            throw new Exception("Sorry $this->name your balance is inefficient.");
        } else {
            return 'ok';
        }
    }
}
?>