<?php
    require_once("../Conexion/conexion.php");
    require_once("../Modelo/distribuidor.php");

class DistribuidorDAO{

    private $distribuidor;

	public function setDistribuidor($nombre, $ruc)
	{
        $this->distribuidor = new Distribuidor();
        $this->distribuidor->setNombre($nombre);
        $this->distribuidor->setRuc($ruc);
    }

	public static function listarDistribuidor()
	{
		$conexion= new Conexion();
        $sql = "select * from distribuidor";
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado;
    }

	public static function buscarId ($id)
	{
		$conexion= new Conexion();
        $sql = "select * from distribuidor where id_distribuidor = ".$id;
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado[0];
	}

	public static function buscar($id,$categoria)
	{
		$conexion= new Conexion();
		$sql = "select * from distribuidor where ".$categoria." like '".$id."%'";
		$listado = $conexion->consultar($sql);
		$conexion->closeConexion();
		return $listado;
	}

	public function ingresarDato()
	{
		$conexion= new Conexion();
		$sql = "insert into distribuidor ( nombre, ruc) values('".$this->distribuidor->getNombre()."','".$this->distribuidor->getRuc()."')";
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}

	public function eliminarDato($id)
	{
		$conexion= new Conexion();
		$sql = "delete from distribuidor where id_distribuidor = ".$id;
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}

	public function editarDato($id)
	{
		$conexion= new Conexion();
		$sql = "update distribuidor set nombre = '".$this->distribuidor->getNombre()."', ruc = '".$this->distribuidor->getRuc()."' where id_distribuidor =".$id;
		$resultado = $conexion->actualizar($sql);
		$conexion->closeConexion();
		return $resultado;
	}
}