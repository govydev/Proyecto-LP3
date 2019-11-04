<?php
    include("../Conexion/conexion.php");

    class HCompra extends Conexion
    {
        public function Hvnt(){
            parent::__contructor();
        }

        public function listar_h_compra(){
            $resultado=$this->conexion_db->query('SELECT * FROM historial_compra');
            $producto=$resultado->fetch_all(MYSQLI_ASSOC);
            return $producto;
        }
        public function delete_h_compra($id){
			$this->conexion_db->query("DELETE FROM historial_compra WHERE id_compra = $id");
        }
        public function create_h_compra($pc,$fc, $cc, $tc, $ip, $id){
			$this->conexion_db->query("INSERT INTO historial_compra (precio_compra, fecha_compra, cantidad_compra, total_compra, id_producto, id_distribuidor)
									   VALUES ('$pc','$fc', '$cc', '$tc', '$ip', '$id')");
		}
    }