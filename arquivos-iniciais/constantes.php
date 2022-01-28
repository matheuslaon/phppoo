<?php 
    class Pessoa {
        const nome = "Matheus";

        public function exibirNome() {
            echo self::nome;
        }
    }

    class Matheus extends Pessoa {
        const nome = "Machado";
        public function exibirNome()
        {
            // para exibir o da classe pai, ou self para o da classe filha
            echo parent::nome;
        }
    }

    $pessoa = new Pessoa();
    $pessoa->exibirNome();
?>