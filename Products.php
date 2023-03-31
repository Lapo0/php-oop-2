<?php

// RICHIEDERE I TIPI DI PRODOTTI E LE CATEGORIE DEI PRODOTTI
require_once "./models/ProductType.php";
require_once "./models/Categories.php";

// ISTANZIARE LE VARIABILI
$animal1 = new Categories("Cane", "Osso", 10, "ciaoneciaoneciaone");

$animal2 = new Categories("Gatto", "Lana", 8, "CIAONECIAONECIAONE");

var_dump($animal1, $animal2);


?>