<?php

require_once __DIR__ . '/BaseProduct.php';

class Bed extends Prod {

    // override
    public function __construct($_type, $_brand, $_cost) {
        $this->type = $_type;
        $this->brand = $_brand;
        $this->cost = $_cost;
    }

    // override
    public function getInfo() {
        return "$this->type - Brand: $this->brand - Cost: $this->cost - Size: $this->size";
    }
}

?>