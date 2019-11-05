<?php
    require_once("../Conexion/conexion.php");
    require_once("../Modelo/producto.php");

class ProductoDAO{

    private $producto;

    public function setProducto($nombre, $stock, $f_vencimiento, $p_venta){
        $this->producto = new Producto();
        $this->producto->setNombre($nombre);
        $this->producto->setStock($stock);
        $this->producto->setF_Vencimiento($f_vencimiento);
        $this->producto->setP_Venta($p_venta);
    }

    public static function listarProducto() {
		$conexion= new Conexion();
        $sql = "select * from producto";
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado;
    }

	//queda pendiente funcion de busqueda
	public static function buscarId ($id) {
		$conexion= new Conexion();
        $sql = "select * from producto where id_producto = ".$id;
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado[0];
	}

	public static function buscar($id,$categoria) {
		$conexion= new Conexion();
		$sql = "select * from producto where ".$categoria." like '".$id."%'";
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado;
	}

    public function ingresarDato() {
		$conexion= new Conexion();
		$sql = "insert into producto ( nombre, stock, fecha_vencimiento, precio_venta) values('".$this->producto->getNombre()."','".$this->producto->getStock()."','".$this->producto->getF_Vencimiento()."','".$this->producto->getP_Venta()."')";
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}

	public function eliminarDato($id) {
		$conexion= new Conexion();
		$sql = "delete from producto where id_producto = ".$id;
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}

	public function editarDato($id) {
		$conexion= new Conexion();
		$sql = "update producto set nombre = '".$this->producto->getNombre()."', stock = '".$this->producto->getStock()."', fecha_vencimiento = '".$this->producto->getF_Vencimiento()."', precio_venta = '".$this->producto->getP_Venta()."' where id_producto =".$id;
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}
}