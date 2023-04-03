<?php

trait Weight {

    public int $weight;

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;

        if($weight > 50) {
            throw new Exception("Il prodotto esiste solo per la categoria Cani");
        }

        return $this;
    }
}


?>