<?php 
    class Pessoa {
        private $nome;

        public function __set($nome, $valor) {
            $this->nome = $valor;
        }

        public function __get($nome) {
            return $this->nome;
        }

        public function __tostring() {
            return "Tentei imprimir o objeto";
        }

        public function __invoke() {
            return "Objeto como função";
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Matheus";

    echo $pessoa(); 
?>