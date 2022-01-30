<?php 
    // Simulação de um sistema simples de uma conta bancária
    // Criação da classe e declaração dos atributos e métodos
    class Banco {
        public $numeroConta;
        protected $tipo; 
        private $dono;
        private $saldo;
        private  $status;

        // Construtor pré setando que ao instanciar a classe
        // por padrão o status da conta é inativo/false
        // e seu saldo é 0.
        public function __construct(){
            $this->status = false;
            $this->saldo = 0;
        }

        // getters e setters para os atributos
        // com suas respectivas lógicas, determinando
        // valores a serem retornados para o usuário
        public function getNumeroConta() {
            return $this->numeroConta;
        }

        public function setNumeroConta($numero) {
            $this->numeroConta = $numero;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setDono($nome) {
            $this->dono = $nome;
        }

        public function getSaldo() {
            return $this->saldo . " Reais";
        }

        public function setSaldo($valor) {
            $this->saldo = $valor;
        }

        public function getStatus() {
            $status = $this->status;
            if ($status) {
                echo "A conta está ativa!";
            } else {
                echo "A conta não está ativa ou não existe";
            }
        }

        public function setStatus($status) {
            if ($status === false) {
                $this->setTipo("");
                $this->setDono("");
                $this->setNumeroConta("");
                $this->setSaldo("");
            } else {
                $this->status = $status;
            }
        }

        // Métodos para executar ações, tais como sacar, depositar
        // abrir fechar conta, e pagar a mensalidade estipulada
        public function abrirConta($nome, $tipo) {
            if ($tipo === "CC" || $tipo === "CP") {
                $this->setDono($nome);
                $this->setTipo($tipo);
                $this->setStatus(true);
                $numeroConta = rand(100, 200);
                $this->setNumeroConta($numeroConta);
                if ($tipo === "CC") {
                    $saldo = $this->getSaldo();
                    $novoSaldo = $saldo + 50;
                    $this->setSaldo($novoSaldo);
                } else {
                    $saldo = $this->getSaldo();
                    $novoSaldo = $saldo + 150;
                    $this->setSaldo($novoSaldo);
                }
                echo "Conta criado com sucesso!";
            } else {
                echo "A conta deve ser do tipo, CC ou CP!";
            }
        }

        public function fecharConta() {
            $saldo = $this->getSaldo();

            if ($saldo > 0) {
                echo "Saque o dinheiro restante para poder fechar a conta!";
            } else if ($saldo < 0){
                echo "Saldo negativo, quite seus débitos para efetuar o fechamento!";
            } else {
                $this->setStatus(false);
                echo "Conta encerrada com sucesso!";
            }
        }

        public function depositar($valor) {
            $saldo = $this->getSaldo();
            $depositar = $saldo + $valor;
            $this->setSaldo($depositar);
            echo "Depósito efetuado com sucesso!";
        }

        public function sacar($valor) {
            $saldo = $this->getSaldo();
            if ($valor > $saldo) {
                echo "Saldo insuficiente";
            } else {
                $sacar = $saldo - $valor;
                $this->setSaldo($sacar);
                echo "Saque efetuado com sucesso!";
            }
        }

        public function pagarMensalidade() {
            $saldo = $this->getSaldo();
            $tipo =  $this->getTipo();

            if ($tipo === "CC") {
                if ($saldo > 12) {
                    $novoSaldo = $saldo - 12;
                    $this->setSaldo($novoSaldo);
                    echo "Mensalidade paga com sucesso!";
                } else {
                    echo "Saldo insuficiente para pagar a mensalidade!";
                }
            } else if ($tipo === "CP") {
                if ($saldo > 20) {
                    $novoSaldo = $saldo - 20;
                    $this->setSaldo($novoSaldo);
                    echo "Mensalidade paga com sucesso!";
                } else {
                    echo "Saldo insuficiente para pagar a mensalidade!";
                }
            } else {
                echo "Tipo da conta inexistente!";
            }
        }
    }

    // Instanciação dos objetos, criando dois tipos de contas para teste
    // conta corrente e conta poupança, os valores foram testados e validados
    // nas funções ou métodos acima descritos
    $contaMatheus = new Banco();
    $contaBele = new Banco();
    $contaMatheus->abrirConta("Matheus Machado", "CC");
    echo "<br>";
    $contaBele->abrirConta("Isabele Elise", "CP");
    echo "<br>";
    echo $contaMatheus->getSaldo();
    echo "<br>";
    $contaMatheus->sacar(50);
    echo "<br>";
    $contaMatheus->fecharConta("Matheus Machado", "CP");
    echo "<br>";
    print_r($contaMatheus);
?>