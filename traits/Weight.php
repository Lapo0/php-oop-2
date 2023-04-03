<?php

trait Weight {

    public $weight;

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {

        $this->isNum($weight);

        $this->weight = $weight;

        return $this;
    }

    public function isNum($weight) {
        if(!is_numeric($weight)) {
            throw new Exception("Il testo inserito $weight deve essere un numero.");
        }
    }
}


?>