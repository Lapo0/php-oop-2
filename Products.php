<?php

    // RICHIEDERE I TIPI DI PRODOTTI E LE CATEGORIE DEI PRODOTTI
    require_once "./models/Category.php";
    require_once "./models/Food.php";
    require_once "./models/Toy.php";
    require_once "./models/Sit.php";

    // ISTANZIARE LE VARIABILI

    $cane = new Category("cane");
    $gatto= new Category("gatto");

    var_dump($cane, $gatto);

    $product1 = new Food("ciao", 1, "ciaone", "23/12/2023");
    $product1->food = "crocchette";
    var_dump($product1);

    $product2 = new Toy("Pallina suonante", 22, "immagine", true);
    $product2->toy = "pallina";
    var_dump($product2);

    $product3 = new Sit("cuccia in piume di beccaccino", 15, "immaginona", "LARGE", "feathers");
    $product3->sit = "cuccia";
    var_dump($product3);



?>