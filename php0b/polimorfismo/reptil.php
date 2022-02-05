<?php 

  class Reptil extends Animal {
    private $corEscama;
    
    public function getCorEscama() {
      return $this->corEscama;
    }

    public function setCorEscama($escama) {
      $this->corEscama = $escama;
    }

    public function locomover() {
      echo "Rastejando...";
    }

    public function alimentar(){
      echo "Comendo vegetais...";
    }

    public function emitirSom(){
      echo "Som de réptil";
    }
  }

?>