<?php

// RICHIEDERE I TIPI DI PRODOTTI E LE CATEGORIE DEI PRODOTTI
require_once "./models/ProductType.php";
require_once "./models/Categories.php";

// ISTANZIARE LE VARIABILI
$animal1 = new Categories("CANE");

var_dump($animal1);


?>