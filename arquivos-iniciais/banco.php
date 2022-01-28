<?php 
    // nao pode instanciar abstract
    abstract class Banco {
        protected $saldo;
        protected $limiteSaque;
        protected $juros;

        public function __construct($saldo, $limiteSaque){
            $this->saldo = $saldo;
            $this->limiteSaque = $limiteSaque;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        abstract protected function Sacar($valor);

        abstract protected function Depositar($valor);
    }

    class Itau extends Banco {
        public function Sacar($valor) {
            if ($valor > $this->saldo) {
                echo "Saldo insuficiente";
            } else {
                $this->saldo -= $valor;
                echo "sacou: R$ $valor reais";
            }
        }

        public function Depositar($valor) {
            if ($valor <= 0) {
                echo "Insira um valor válido";
            } else {
                $this->saldo += $valor;
                echo "Depósito efetuado com sucesso seu novo saldo é de: $this->saldo reais";
            }
        }
    }

    $itau = new Itau(1000, 500);
    echo $itau->getSaldo();
    $itau->Sacar(250);
    echo $itau->getSaldo();
    $itau->Depositar(0);
?>