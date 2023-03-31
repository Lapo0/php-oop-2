<?php

require_once __DIR__ . "/Product.php";

class Food extends Product{
    
    public $expiration;

    public function __construct($_name, $_price, $_image, $_expiration, $category) {

        parent::__construct($_name, $_price, $_image, $category);
        $this->expiration = $_expiration;

    }

}


?>