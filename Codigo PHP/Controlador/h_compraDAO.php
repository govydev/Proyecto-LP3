<?php
    require_once("../Conexion/conexion.php");
    require_once("../Modelo/h_compra.php");

class HCompraDAO{

    private $h_compra;

    public function setHcompra($p_compra, $f_compra, $c_compra, $t_compra, $id_producto, $id_distribuidor){
        $this->h_compra = new Hcompra();
        $this->h_compra->setPrecio_compra($p_compra);
        $this->h_compra->setFecha_compra($f_compra);
        $this->h_compra->setCantidad_compra($c_compra);
        $this->h_compra->setTotal_compra($t_compra);
        $this->h_compra->setId_producto($id_producto);
        $this->h_compra->setId_distribuidor($id_distribuidor);
    }

    public static function listarHcompra() {
		$conexion= new Conexion();
        //$sql = "SELECT p.nombre, hv.cantidad_compra, hv.total_compra, hv.fecha_compra FROM historial_compra hv, producto p";
        $sql = "select * FROM historial_compra ";
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado;
    }
//falta modificar
	//queda pendiente funcion de busqueda
	public static function buscarId ($id) {
		$conexion= new Conexion();
        //$sql = "select p.nombre, d.nombre, hv.cantidad_compra, hv.total_compra, hv.fecha_compra FROM historial_compra hv, producto p, distribuidor d WHERE hv.id_compra = ".$id." and hv.id_producto = p.id_producto";
        $sql = "SELECT * FROM historial_compra WHERE id_compra=".$id."";
        $listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado[0];
	}
//falta modificar
	public static function buscar($id,$categoria) {
		$conexion= new Conexion();
		//$sql = "select p.nombre, hv.cantidad_compra, hv.total_compra, hv.fecha_compra FROM historial_compra hv, producto p WHERE ".$categoria." like '".$id."%' and hv.id_producto = p.id_producto";
		$sql = "select * FROM historial_compra WHERE ".$categoria." like '".$id."%'";
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado;
	}

    public function ingresarDato() {
		$conexion= new Conexion();
		$sql = "insert into historial_compra ( precio_compra, fecha_compra, cantidad_compra, total_compra, id_producto, id_distribuidor) values('".$this->h_compra->getPrecio_compra()."','".$this->h_compra->getFecha_compra()."','".$this->h_compra->getCantidad_compra()."','".$this->h_compra->getTotal_compra()."','".$this->h_compra->getId_producto()."','".$this->h_compra->getId_distribuidor()."')";
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}

	public function eliminarDato($id) {
		$conexion= new Conexion();
		$sql = "delete from historial_compra where id_compra = ".$id;
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}
    //falta modificar
	public function editarDato($id) {
		$conexion= new Conexion();
		$sql = "update historial_compra set precio_compra = '".$this->h_compra->getPrecio_compra()."', fecha_compra = '".$this->h_compra->getFecha_compra()."', cantidad_compra = '".$this->h_compra->getCantidad_compra()."', total_compra = '".$this->h_compra->getTotal_compra()."', id_producto = '".$this->h_compra->getId_producto()."', id_distribuidor = '".$this->h_compra->getId_distribuidor()."' where id_compra =".$id;
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}
}