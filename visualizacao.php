<?php 
  require_once 'video.php';
  require_once 'gafanhoto.php';
  $mysqli= new mysqli("localhost", "root", "");
  class Visualizacao {
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme){
      $this->setEspectador($espectador);
      $this->setFilme($filme);
      $this->filme->setViews($this->filme->getViews() + 1);
      $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
      $this->filme->setReproduzindo(true);
    }

    public function getEspectador() {
      return $this->espectador;
    }

    public function setEspectador($espectador) {
      $this->espectador = $espectador;
    }

    public function getFilme() {
      return $this->filme;
    }

    public function setFilme($filme) {
      $this->filme = $filme;
    }

    public function avaliar() {
      $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota) {
      $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorcentagem($porcentagem) {
      $nova = 0;
      if ($porcentagem <= 20) {
        $nova = 3;
      } else if ($porcentagem <= 50) {
        $nova = 5;
      } else if ($porcentagem <= 90) {
        $nova = 8;
      } else  {
        $nova = 10;
      }
      $this->filme->setAvaliacao($nova);
    }
  }

?>