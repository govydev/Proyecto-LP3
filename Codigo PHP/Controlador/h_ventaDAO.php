<?php
    require_once("../Conexion/conexion.php");
    require_once("../Modelo/h_venta.php");

class HVentaDAO{

    private $h_venta;

    public function setHVenta($f_venta, $c_venta, $t_venta, $id_producto){
        $this->h_venta = new HVenta();
        $this->h_venta->setFecha_venta($f_venta);
        $this->h_venta->setCantidad_venta($c_venta);
        $this->h_venta->setTotal_venta($t_venta);
        $this->h_venta->setId_producto($id_producto);
    }

    public static function listarHVenta() {
		$conexion= new Conexion();
        $sql = "SELECT hv.id_venta, p.nombre, hv.cantidad_venta, hv.total_venta, hv.fecha_venta FROM historial_venta hv, producto p";
        //$sql = "select * FROM historial_venta ";
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado;
    }

	//queda pendiente funcion de busqueda
	public static function buscarId ($id) {
		$conexion= new Conexion();
        $sql = "SELECT hv.id_venta,p.nombre, hv.cantidad_venta, hv.total_venta, hv.fecha_venta FROM historial_venta hv, producto p WHERE hv.id_venta = ".$id." and hv.id_producto = p.id_producto";
		//$sql = "select * FROM historial_venta WHERE id_venta=".$id."";
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado[0];
	}

	public static function buscar($id,$categoria) {
		$conexion= new Conexion();
		$sql = "SELECT hv.id_venta,p.nombre, hv.cantidad_venta, hv.total_venta, hv.fecha_venta FROM historial_venta hv, producto p WHERE ".$categoria." like '".$id."%' and hv.id_producto = p.id_producto";
		//$sql = "select * FROM historial_venta WHERE ".$categoria." like '".$id."%'";
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado;
	}

    public function ingresarDato() {
		$conexion= new Conexion();
		$sql = "INSERT INTO historial_venta ( fecha_venta, cantidad_venta, total_venta, id_producto) VALUES('".$this->h_venta->getFecha_venta()."','".$this->h_venta->getCantidad_venta()."','".$this->h_venta->getTotal_venta()."','".$this->h_venta->getId_producto()."')";
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}

	public function eliminarDato($id) {
		$conexion= new Conexion();
		$sql = "DELETE from historial_venta WHERE id_venta = ".$id;
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}

	public function editarDato($id) {
		$conexion= new Conexion();
		$sql = "UPDATE historial_venta SET fecha_venta = '".$this->h_venta->getFecha_venta()."', cantidad_venta = '".$this->h_venta->getCantidad_venta()."', total_venta = '".$this->h_venta->getTotal_venta()."', id_producto = '".$this->h_venta->getId_producto()."' WHERE id_venta =".$id;
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}
}