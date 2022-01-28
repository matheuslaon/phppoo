<?php 
    class Login {
        public static $user;

        public static function verificaLogin() {
            echo "O usuário está logado," .self::$user;
        }
    }
    // Métodos estaticos nao precisa instanciar a classe,
    // porém ainda é possivel usar métodos nao estáticos
    Login::$user = "admin";
    Login::verificaLogin();
?>