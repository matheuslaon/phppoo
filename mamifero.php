<?php 

  class Mamifero extends Animal {
    private $corPelo;

    public function getPelo() {
      return $this->corPelo;
    }

    public function setPelo($pelo) {
      $this->corPelo = $pelo;
    }

    public function locomover() {
      echo "Mamífero correndo...";
    }

    public function alimentar() {
      echo "Mamando...";
    }

    public function emitirSom() {
      echo "Som de mamífero...";
    }
  }

?>