<?php 

  class Ave extends Animal {
    private $corPena;

    public function getCorPena() {
      return $this->corEscama;
    }

    public function setCorPena($corPena) {
      $this->corPena = $corPena;
    }

    public function locomover() {
      echo "Voando...";
    }

    public function alimentar() {
      echo "Ave bicando...";
    }

    public function emitirSom() {
      echo "Som de ave";
    }

    public function fazerNinho() {
      echo "A ave fez um ninho...";
    }
  }

?>