<?php

trait Weight {

    public int $weight;

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    
        return $this;
      }
}


?>