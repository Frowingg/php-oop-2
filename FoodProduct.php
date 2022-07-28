<?php

require_once __DIR__ . '/BaseProduct.php';

class Food extends Prod {
    // override
    public $weightKg;

    // override
    public function __construct($_type, $_brand, $_cost, $_weightKg) {
        $this->type = $_type;
        $this->brand = $_brand;
        $this->cost = $_cost;
        $this->weightKg = $_weightKg;
    }

    // override
    public function getInfo() {
        return "$this->type - Brand: $this->brand - Cost: $this->cost - Weight: $this->weightKg";
    }
}

?>