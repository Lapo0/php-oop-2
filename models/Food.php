<?php

require_once __DIR__ . "/Product.php";

class Food extends Product{
    
    public $expiration;

    public function __construct($_name, $_price, $_image, $_expiration) {

        parent::__construct($_name, $_price, $_image);
        $this->expiration = $_expiration;

    }

}


?>