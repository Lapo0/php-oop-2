<?php

// CREARE UNA CLASSE FIGLIA DIRETTA DI Product PER SELEZIONARE LA CATEGORIA ANIMALE
class Category {

    // DEFINIRE VARIABILI DA ISTANZIARE
    public string $animal;

    function __construct($_animal) {

        $this->animal = $_animal;
    }
}

?>