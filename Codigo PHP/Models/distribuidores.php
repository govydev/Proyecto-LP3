<?php
    include("../Conexion/conexion.php");

    class Distribuidor extends Conexion
    {
        public function Dst(){
            parent::__contructor();
        }

        public function listar_distribuidores(){
            $resultado=$this->conexion_db->query('SELECT * FROM distribuidor');
            $socio=$resultado->fetch_all(MYSQLI_ASSOC);
            return $socio;
        }
    }
    