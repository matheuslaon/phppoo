<?php
    require_once 'pessoa.php';
    require_once 'aluno.php';
    require_once 'funcionario.php';
    require_once 'professor.php';
    require_once 'bolsista.php';
    require_once 'tecnico.php';
    $p = array();
    // $p[0] = new Pessoa2(); Classe abstrata nao se instancia.
    $p[1] = new Aluno();
    $p[2] = new Funcionario(); // Herança pobre ou de implementação. não adiciona nada apenas busca da mãe
    $p[3] = new Professor();
    $p[4] = new Bolsista();
    $p[5] = new Tecnico();
    $p[3]->setNome("Ricardo");
    $p[3]->setSalario(2000);
    echo $p[3]->getSalario();
    $p[3]->receberAum(500);
    echo "<br>";
    echo $p[3]->getSalario();
    $p[4]->setNome('Matheus');
    $p[4]->pagarMensalidade();
    // Conceitos importantes
    // Classe abstrata:
    // Não pode ser instanciada.
    // Só pode servir como progenitora.
    // Método abstrato:
    // Declarado, mas não implementado na progenitora.
    // Classe final:
    // Não pode ser herdada por outra classe.
    // Obrigatoriamente folha.
    // Método final:
    // Não pode ser sobrescrito pelas suas sub-classes,
    // Obrigatoriamente herdado.
    // Usar o final impede o método de ser sobreposto
    // se for a classe ela não poderá ter filhos

    abstract class Pessoa2 {
        private $nome;
        private $idade;
        private $sexo;

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        public final function fazerAniv() {
            $this->idade + 1;
        }
    }

?>