<?php

trait SizeProduct {
    public $size;

    public function getSize() {
        $sizes = ['small', 'medium', 'large'];
        $num = rand(0, 2);
        return $this->size = $sizes[$num];
    }
}

?>