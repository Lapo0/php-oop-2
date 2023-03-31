<?php


// CREARE CLASSE PER I PRODOTTI IN GENERALE
class Product {

    // CREARE VARIABILI PER POI ISTANZIARLE
    protected string $name;
    protected int $price;
    protected string $image;

    // CREARE UNA FUNZIONE CONSTRUTTRICE A CUI PASSARE LE VARIABILI
    function __construct($_name, $_price, $_image) {

        // PASSARE VARIABILI AL COSTRUTTORE
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
    }


    // CREARE FUNZIONE PUBLIC PER POTER UTILIZZARE LE VARIABILI PROTECTED COME ISTANZE
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }
}


?>