<?php 

    class Professor extends Pessoa2 {
        private $especialidade;
        private $salario;

        public function getEspecialidade() {
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade) {
            $this->especialidade = $especialidade;
        }

        public function getSalario() {
            return $this->salario;
        }

        public function setSalario($salario) {
            $this->salario = $salario;
        }

        public function receberAum($valor) {
            $novoSalario = $this->getSalario() + $valor;
            $this->setSalario($novoSalario);
        }
    }

?>