<?php
    include("../Conexion/conexion.php");

    class Producto extends Conexion
    {
        public function Prdt(){
            parent::__contructor();
        }

        public function listar_productos(){
            $resultado=$this->conexion_db->query('SELECT * FROM producto');
            $producto=$resultado->fetch_all(MYSQLI_ASSOC);
            return $producto;
        }
        public function delete_producto($id){
			$this->conexion_db->query("DELETE FROM producto WHERE id_producto = $id");
        }
        public function create_producto($nom,$stk, $fv, $pv){
			$this->conexion_db->query("INSERT INTO producto (nombre, stock, fecha_vencimiento, precio_venta)
									   VALUES ('$nom', '$stk', '$fv', '$pv')");
		}
    }