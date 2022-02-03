<?php 

  class Peixe extends Animal {
    private $corEscama;

    public function getCorEscama() {
      return $this->corEscama;
    }

    public function setCorEscama($escama) {
      $this->corEscama = $escama;
    }

    public function locomover() {
      echo "Nadando...";
    }

    public function alimentar() {
      echo "Peixe mastigando...";
    }

    public function emitirSom() {
      echo "Som de peixe";
    }

    public function soltarBolha() {
      echo "O peixe soltou bolhas...";
    }
  }

?>