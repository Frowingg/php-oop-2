<?php

class Prod {
    public $type;

    public $brand;

    public $cost;

    public function __construct($_type, $_brand, $_cost) {
        $this->type = $_type;
        $this->brand = $_brand;
        $this->cost = $_cost;

    }

    public function getInfo() {
        return "$this->type - Brand: $this->brand - Cost: $this->cost";
    }

}

?>