<?php

// RICHIEDERE I TIPI DI PRODOTTI E LE CATEGORIE DEI PRODOTTI
require_once "./models/Category.php";
require_once "./models/Product.php";

// ISTANZIARE LE VARIABILI

$cane = new Category("cane");
$gatto= new Category("gatto");

var_dump($cane, $gatto);



?>