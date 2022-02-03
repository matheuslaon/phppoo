<?php
  require_once 'animal.php';
  require_once 'mamifero.php';
  require_once 'reptil.php';
  require_once 'peixe.php';
  require_once 'ave.php';

  $animal = array();
  $animal[0] = new Mamifero();
  $animal[1] = new Reptil();
  $animal[2] = new Peixe();
  $animal[3] = new Ave();
  $animal[0]->setPelo("Longo");
  $animal[0]->setPeso(80);
  $animal[3]->locomover();
  echo "<pre>";
  print_r($animal);
?>