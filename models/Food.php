<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/../traits/Weight.php";

class Food extends Product{

    use Weight;

    public $expiration;

    public function __construct($_name, $_price, $_image, $_expiration, $category, $weight) {

        parent::__construct($_name, $_price, $_image, $category);
        $this->expiration = $_expiration;
        $this->setWeight($weight);

    }

    

}


?>