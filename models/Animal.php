<?php

// RICHIEDERE IL FILE CONTENENTE LA CLASSE PRODOTTO
require_once __DIR__ . "/Food.php";

// CREARE UNA CLASSE FIGLIA DIRETTA DI Product
class Categories extends Product {

    // DEFINIRE VARIABILI DA ISTANZIARE
    public string $animal;

    function __construct($_animal, $_name, $_price, $_image) {

        parent::__construct($_name, $_price, $_image);

        $this->animal = $_animal;
    }

}

?>