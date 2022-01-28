<?php 
    require 'classes/produto.php';
    require 'models/produto.php';
    use models\Produto as productModel;
    $produto = new ProductModel();
    $produto->mostrarDetalhes();
?>