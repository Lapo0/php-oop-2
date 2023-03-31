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

    $product1 = new Food("Crocchette multiuso Cane & Gatto", 1, "https://i0.wp.com/www.bizon.it/wp-content/uploads/2020/11/crocchette-per-cani-superpremium-maiale-e-patate-kg-10.jpg", "23/12/2023", $cane);
    $product1->food = "crocchette";
    var_dump($product1);

    $product2 = new Toy("Pallina suonante", 22, "https://www.pacopetshop.it/3500-thickbox_default/palla-5-sensi-gioco-per-cani.jpg", true, $gatto);
    $product2->toy = "pallina";
    var_dump($product2);

    $product3 = new Sit("Cuccia in piume di beccaccino", 15, "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg", "LARGE", "feathers", $cane);
    $product3->sit = "cuccia";
    var_dump($product3);


    $products = [
        $product1,
        $product2,
        $product3,
    ]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <?php
            foreach ($products as $product) {
                $product->printCardHTML();
            } ?>
    </div>
</div>
    
</body>
</html>