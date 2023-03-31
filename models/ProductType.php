<?php

// RICHIEDERE IL FILE CONTENENTE LA CLASSE Product
require_once __DIR__ . "/Product.php";

// CREARE UNA CLASSE FIGLIA DIRETTA DI Product
class Type extends Product {

    // DEFINIRE VARIABILI DA ISTANZIARE
    public $cibo;
    public $giochi;
    public $cuccia;

}


?>