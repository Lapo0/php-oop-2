<?php

// RICHIEDERE IL FILE CONTENENTE LA CLASSE PRODOTTO
require_once __DIR__ . "/Product.php";

// CREARE UNA CLASSE FIGLIA DIRETTA DI Product
class Categories extends Product {

    // DEFINIRE VARIABILI DA ISTANZIARE
    public string $animal;

    function __construct($_animal) {

        parent::__construct("Osso", 10, "ciao");

        $this->aniaml = $_animal;
    }

}

?>