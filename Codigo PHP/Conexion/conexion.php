<?php
 include("config.php");

class Conexion{
    protected $conexion_db;
    //contructor
	public function Conexion(){
        //el uso de (mysqli) es necesario a partir de versiones superiores a PHP 5.4
        $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);

        if($this->conexion_db->connect_errno){
            echo "Fallo al conectar a Mysql: ".$this->conexion_db->connect_error;
            return;
        }	
        $this->conexion_db->set_charset(DB_CHARSET);
    }	
}