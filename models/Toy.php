<?php

require_once __DIR__ . "/Product.php";

class Toy extends Product{
    
    public bool $sound;

    public function __construct($_name, $_price, $_image, $_sound) {

        parent::__construct($_name, $_price, $_image);
        $this->sound = $_sound;

    }

}


?>