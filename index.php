<?php

    require_once 'controleRemoto.php';
    echo "<pre>";
    $c = new ControleRemoto();
    $c->ligar();
    $c->maisVolume();
    $c->maisVolume();
    $c->abrirMenu();
?>