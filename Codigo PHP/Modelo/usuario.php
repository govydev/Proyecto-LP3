<?php

    class Usuario{
        private $usuario;
        private $password;

        public function setUsuario($usuario){
            $this->usuario=$usuario;
        } 
    
        public function getUsuario(){
            return $this->usuario;
        }
        public function setPassword($password){
            $this->password=$password;
        } 
    
        public function getPassword(){
            return $this->password;
        }
    }
?>