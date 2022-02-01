<?php 

    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria($peso);
        }

        public function getCategoria() {
            return $this->categoria;
        }

        private function setCategoria() {
            if ($this->getPeso() < 52.2) {
                $this->categoria = "Peso insuficiente!";
            } else if ($this->getPeso() <= 70.3) {
                $this->categoria = "Peso leve.";
            } else if ($this->getPeso() <= 83.9) {
                $this->categoria = "Peso médio.";
            } else if ($this->getPeso() <= 120.2) {
                $this->categoria = "Peso pesado.";
            } else {
                $this->categoria = "Lutador não atende as categorias determinadas!";
            }
        }

        public function getVitorias() {
            return $this->vitorias;
        }

        public function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }

        public function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }

        public function getEmpates() {
            return $this->empates;
        }

        public function setEmpates($empates) {
            $this->empates = $empates;
        }

        public function apresentar() {
            echo ("Lutador: " . $this->getNome());
            echo ("Origem: " . $this->getNacionalidade());
            echo ($this->getIdade() . " anos");
            echo ($this->getAltura() . " m de altura");
            echo ("Pesando: " . $this->getPeso());
            echo ("Ganhou: " . $this->getVitorias());
            echo ("Perdeu: " . $this->getDerrotas());
            echo ("Empatou: " . $this->getEmpates());
        }

        public function status() {
            echo ($this->getNome());
            echo ("É um peso " . $this->getCategoria());
            echo ($this->getVitorias() . "Vitórias");
            echo ($this->getDerrotas() . "Derrotas");
            echo ($this->getEmpates() . "Empates");
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }
    }

?>