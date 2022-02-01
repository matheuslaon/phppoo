<?php 
  require_once 'controlador.php';
  class ControleRemoto implements Controlador {
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;

    // Construtor iniciado ao instanciar o objeto.
    public function __construct(){
      $this->volume = 50;
      $this->ligado = false;
      $this->tocando = false;
    }

    // Métodos ou funções.
    private function getVolume() {
      return $this->volume;
    }

    private function setVolume($valor) {
      $this->volume = $valor;
    }

    private function getLigado() {
      return $this->ligado;
    }

    private function setLIgado($status) {
      $this->ligado = $status;
    }

    private function getTocando() {
      return $this->tocando;
    }

    private function setTocando($tocando) {
      $this->tocando = $tocando;
    }

    public function ligar() {
      $this->setLIgado(true);
    }

    public function desligar(){
      $this->setLIgado(false);
    }

    public function abrirMenu(){
      echo "<p>----- MENU ----- </p>";
      echo "<br>Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
      echo "<br>Está tocando?: " . ($this->getTocando() ? "SIM" : "NÃO");
      echo "<br>Volume: " . $this->getVolume();
      for ($i=0; $i <= $this->getVolume(); $i+= 10) { 
        echo " | ";
      }
      echo "<br>";
    }

    public function fecharMenu(){
      echo "<br>Fechando menu...";
    }

    public function maisVolume(){
      if ($this->getLigado()) {
        $this->setVolume($this->getVolume() + 5);
      } else {
        echo "TV desligada, não pode aumentar o volume!";
      }
    }
    
    public function menosVolume(){
      if ($this->getLigado()) {
        $this->setVolume($this->getVolume() - 5);
      } else {
        echo "TV desligada, não pode diminuir o volume!";
      }
    }

    public function ligarMudo(){
      if ($this->getLigado() && $this->getVolume() > 0) {
        $this->setVolume(0);
      }
    }

    public function desligarMudo(){
      if ($this->getLigado() && $this->getVolume() === 0) {
        $this->setVolume(50);
      }
    }

    public function play(){
      if ($this->getLigado() && !($this->getTocando())) {
        $this->setTocando(true);
      }
    }

    public function pause(){
      if ($this->getLigado() && $this->getTocando()) {
        $this->setTocando(true);
      }
    }
  }
?>