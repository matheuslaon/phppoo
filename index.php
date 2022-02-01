<?php
    require_once 'publicacao.php';
    require_once 'pessoa.php';
    require_once 'livro.php';
    $p = new Pessoa("Matheus Machado", 26, "Masculino");
    $l = new Livro("Memórias póstumas de Brás Cubas", "Machado de Assis", 500, $p);
    $l->detalhes();
    $l->abrir($p);
?>