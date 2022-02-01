<?php 

    require_once 'publicacao.php';
    require_once 'pessoa.php';

    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totalPaginas;
        private $paginaAtual;
        private $aberto;
        private $leitor;

        public function __construct($titulo, $autor, $totalPaginas, $leitor){
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotalPaginas($totalPaginas);
            $this->setLeitor($leitor);
            $this->setAberto(false);
            $this->setPaginaAtual(1);
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function getLeitor() {
            return $this->leitor;
        }

        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }
        
        public function getPaginaAtual() {
            return $this->paginaAtual;
        }

        public function setPaginaAtual($paginaAtual) {
            $this->paginaAtual = $paginaAtual;
        }

        public function getAberto() {
            return $this->aberto;
        }

        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }

        public function getTotalPaginas() {
            return $this->totalPaginas;
        }

        public function setTotalPaginas($totalPaginas) {
            $this->totalPaginas = $totalPaginas;
        }

        public function detalhes() {
            echo "----- Detalhes do livro" . $this->getTitulo() . " -----";
            echo "<br>";
            echo $this->getAutor();
            echo "<br>";
            echo $this->getTitulo();
            echo "<br>";
            echo $this->getTotalPaginas() . " páginas";
        }

        public function abrir(){
            $this->setAberto(true);
        }

        public function fechar(){
            $this->setAberto(false);
        }

        public function folhear($p){
            if ($p > $this->getTotalPaginas()) {
                $this->setPaginaAtual(0);
            }
        }

        public function avancarPagina(){
            if ($this->getPaginaAtual() > $this->getTotalPaginas()) {
                echo "Você finalizou o livro!";
            } else {
                $this->getPaginaAtual() + 1;
            }
        }

        public function voltarPagina(){
            if ($this->getPaginaAtual() < 0) {
                echo "Você está na priemeira página do livro!";
            } else {
                $this->getPaginaAtual() - 1;
            }
        }

    }

?>