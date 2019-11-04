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
        public function delete_distribuidor($id){
            $this->conexion_db->query("DELETE FROM distribuidor WHERE id_distribuidor = $id");
        }
        public function create_distribuidor($nom,$ruc){
			$this->conexion_db->query("INSERT INTO distribuidor (nombre, ruc)
                                       VALUES ('$nom', '$ruc')");
		}
    }
    