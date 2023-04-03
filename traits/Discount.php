<?php


// Creare un trait da implementare solo al costo del cibo
trait Discount {

    // Funzione che controlla il prezzo dell'alimento 
    // Se l'alimento costa più di 10 euro viene applicato uno sconto del 20%

    public function isDiscount($_foodPrice) {

        // condizione che verifica se il prezzo è inferiore a 10€
        if($_foodPrice > 10) {
            $_foodPrice = $_foodPrice - ($_foodPrice / 20);
        }


        return $_foodPrice;
    }
}


?>