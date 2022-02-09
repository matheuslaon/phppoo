<?php

  require_once 'pessoaVideo.php';
  require_once 'video.php';
  require_once 'gafanhoto.php';
  require_once 'acoesVideo.php';
  require_once 'visualizacao.php';

  $v = array();
  $v[0] = new Video("Aula 1 de POO");
  $v[1] = new Video("Aula 12 de PHP");
  $v[2] = new Video("Aula 15 de HTML5");
  $v[3] = new Gafanhoto("Matheus", 26, "M", "polako");
  $v[4] = new Gafanhoto("Isabele", 21, "F", "igeekap");
  $v[5] = new Visualizacao($v[3], $v[2]);
  $v[5]->avaliar();
  echo "<pre>";
  print_r($v);

?>