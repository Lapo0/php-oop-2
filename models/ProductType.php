<?php

// RICHIEDERE IL FILE CONTENENTE LA CLASSE Product
require_once __DIR__ . "/Product.php";

// CREARE UNA CLASSE FIGLIA DIRETTA DI Product
class Type extends Product {

    // DEFINIRE VARIABILI DA ISTANZIARE
    public string $food;
    public string $toy;
    public string $sit;

    function __construct($_food, $_toy, $_sit) {


        $this->food = $_food;
        $this->toy = $_toy;
        $this->sit = $_sit;

    }

}


?>