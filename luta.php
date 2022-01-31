<?php
    require_once 'lutador.php';
    class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function getDesafiado() {
            return $this->desafiado;
        }

        public function setDesafiado($dd) {
            $this->desafiado = $dd;
        }

        public function getDesafiante() {
            return $this->desafiante;
        }

        public function setDesafiante($de) {
            $this->desafiante = $de;
        }

        public function getRounds() {
            return $this->rounds;
        }

        public function setRounds($rounds) {
            $this->rounds = $rounds;
        }

        public function getAprovada() {
            return $this->aprovada;
        }

        public function setAprovada($status) {
            $this->aprovada = $status;
        }

        public function marcarLuta($l1, $l2) {
            if ($l1->getCategoria() === $l2->getCategoria() && $l1 !== $l2) {
                $this->setAprovada(true);
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            } else {
                echo "Não podem lutar!.";
                $this->setAprovada(false);
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        public function lutar() {
            if ($this->getAprovada()) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0:
                        echo "Empate!";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                    break;
                    case 1:
                        echo $this->desafiado->getNome();
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                    break;  
                    case 2:
                        echo $this->desafiante->getNome();
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                    break;   
                }
            }
        }
    }

?>