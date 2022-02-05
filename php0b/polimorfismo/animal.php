<?php 
/*
  require_once 'animal.php';
  require_once 'mamifero.php';
  require_once 'reptil.php';
  require_once 'peixe.php';
  require_once 'ave.php';
  require_once 'lobo.php';
  require_once 'cachorro.php';

  $animal = array();
  $animal[0] = new Mamifero();
  $animal[1] = new Reptil();
  $animal[2] = new Peixe();
  $animal[3] = new Ave();
  $animal[4] = new Lobo();
  $animal[5] = new Cachorro();
  $animal[0]->setPelo("Longo");
  $animal[0]->setPeso(80);
  $animal[3]->locomover();
  $animal[4]->emitirSom();
  $animal[5]->emitirSom();
  echo $animal[2]->setCorEscama(10);
  echo "<pre>";
  print_r($animal);
  */
abstract class Animal {
  protected $peso;
  protected $idade;
  protected $membros;

  public function getPeso() {
    return $this->peso;
  }

  public function setPeso($peso) {
    $this->peso = $peso;
  }

  public function getIdade() {
    return $this->idade;
  }

  public function setIdade($idade) {
    $this->idade = $idade;
  }

  public function getMembros() {
    return $this->membros;
  }

  public function setMembros($membros) {
    $this->membros = $membros;
  }

  public abstract function locomover();
  public abstract function alimentar();
  public abstract function emitirSom();

}

?>