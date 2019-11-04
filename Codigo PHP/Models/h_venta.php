<?php
    include("../Conexion/conexion.php");

    class HVenta extends Conexion
    {
        public function Hvnt(){
            parent::__contructor();
        }

        public function listar_h_venta(){
            $resultado=$this->conexion_db->query('SELECT * FROM historial_venta');
            $producto=$resultado->fetch_all(MYSQLI_ASSOC);
            return $producto;
        }
        public function delete_h_venta($id){
			$this->conexion_db->query("DELETE FROM historial_venta WHERE id_venta = $id");
        }
        public function create_h_venta($fv,$cv, $tv, $ip){
			$this->conexion_db->query("INSERT INTO historial_venta (nombre, stock, fecha_vencimiento, precio venta)
									   VALUES ('$nom', '$stk', '$fv', '$pv')");
		}
    }