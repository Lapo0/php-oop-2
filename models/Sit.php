<?php

require_once __DIR__ . "/Product.php";

class Sit extends Product{
    
    public $size;
    public $material;

    public function __construct($_name, $_price, $_image, $_size, $_material) {

        parent::__construct($_name, $_price, $_image);
        $this->size = $_size;
        $this->material = $_material;

    }

}


?>