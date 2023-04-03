<?php

require_once __DIR__ . "/Category.php";

// CREARE CLASSE PER I PRODOTTI IN GENERALE
class Product {
    
    // CREARE VARIABILI PER POI ISTANZIARLE
    protected string $name;
    protected float $price;
    protected string $image;
    
    public Category $category;

    public string $food;
    public string $toy;
    public string $sit;

    // CREARE UNA FUNZIONE CONSTRUTTRICE A CUI PASSARE LE VARIABILI
    function __construct($_name, $_price, $_image, Category $_category) {

        // PASSARE VARIABILI AL COSTRUTTORE
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
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

    public function printCardHTML() {
    
        ?>
            <div class="col">
            <div class="card h-100">
                <img src="<?php echo $this->getImage() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo $this->getName() ?></h5>
                    <li><strong>Prezzo:</strong> <?php echo $this->getPrice() ?> <strong>€</strong> </li>
                </ul>
                </div>
            </div>
            </div>
        <?php
    }
}


?>