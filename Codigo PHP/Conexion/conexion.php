<?php
 include("config.php");

class Conexion {
	private $conexion;

	public function __construct()
	{
		if(!isset($this->conexion))
		{
			$this->conexion= new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE)or die(mysql_error());
		}
		$this->conexion->set_charset('utf8');		
	}	

	public function consultar ($sql)
	{
		$contenedor = $this->conexion->query($sql);
		return $contenedor->fetch_all();
	}

	public function actualizar ($sql)
	{
		return $this->conexion->query($sql);
	}

	public function closeConexion()
	{
		return mysqli_close($this->conexion);
	}
}

?>