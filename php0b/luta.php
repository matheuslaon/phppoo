<?php

    // require_once 'lutador.php';
    // require_once 'luta.php';
    // $l = array();
    // $l[0] = new Lutador("Pretty boy", "França", 31, 1.75, 68.9, 11, 2, 1);
    // $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    // $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
    // $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    // $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    // $l[5] = new Lutador("Nerdart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
    
    // echo "<pre>";
    // $uec01 = new Luta();
    // $uec01->marcarLuta($l[1], $l[0]);
    // $uec01->lutar();
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