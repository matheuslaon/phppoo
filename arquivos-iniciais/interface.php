<?php 
    // classes que implementarem a interface devem seguir a lógica
    // e os metodos devem ser publicos
    interface Crud {
        // pode incluir parametros
        public function create();
        public function read();
        public function update();
        public function delete();
    }

    class Noticias implements Crud {
        public function create() {

        }
        public function read() {
            
        }
        public function update() {
            
        }
        public function delete() {
            
        }
    }
?>