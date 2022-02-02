<?php

    class Tecnico extends Aluno {
        private $registroProfissional;

        public function getRegistroProfissional() {
            return $this->registroProfissional;
        }

        public function setRegistroProfissional($registro) {
            $this->registroProfissional = $registro;
        }

        public function praticar() {
            return "Aluno praticando!";
        }
    }

?>