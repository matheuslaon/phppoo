<?php 
    class Notebook {
        public $teclado;
        public $tela;
        public $carregador;
        public $ligado;
        public $carga;
        private $memoria;

        public function __getMemoria() {
            return $this->memoria;
        }

        public function __setMemoria($memoria) {
            $this->$memoria = $memoria;
        }

        public function __construct($teclado, $tela, $carregador, $ligado, $carga){
            $this->teclado = $teclado;
            $this->tela = $tela;
            $this->carregador = $carregador;
            $this->ligado = $ligado;
            $this->carga = $carga;
        }

        public function ligar() {
            if (!$this->ligado) {
                echo "O notebook está ligando.";
            }else {
                echo "O notebook já está ligado.";
            }
        }

        public function desligar() {
            if ($this->ligado) {
                echo "O notebook está desligando";
            }else {
                echo "O notebook já está desligado";
            }
        }

        public function carregar() {
            if ($this->carga === "100%") {
                echo "O notebook está com a carga completa!";
            } else {
                echo "O notebook está carregando";
            }
        }
    }

    $pc = new Notebook("ABNT-02", "14 polegadas", true, false, "50%");
    $pc->carregar();
    $pc->__setMemoria(1024);
    print_r($pc);
?>