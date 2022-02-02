<?php

    class Bolsista extends Aluno {
        private $bolsa;
        
        public function getBolsa() {
            return $this->bolsa;
        }

        public function setBolsa($bolsa) {
            $this->bolsa = $bolsa;
        }

        public function renovarBolsa() {
            return "Bolsa renovada com sucesso";
        }

        public function pagarMensalidade() {
            echo "Pago com desconto.";
        }
    }

?>