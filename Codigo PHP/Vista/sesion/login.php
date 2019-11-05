<?php 


	session_start();
	require_once "../Conexion/conexion.php";

	$conexion= new Conexion();

		$usuario=$_POST['usuario'];
		$pass=sha1($_POST['password']);

		$sql="SELECT * from usuario where usuario='$usuario' and contraseña='$pass'";
		$listado = $conexion->consultar($sql);
        //$conexion->closeConexion();
		if(mysqli_num_rows($listado) < 0){
			$_SESSION['usuario']=$usuario;
			echo 1;
		}else{
			echo 0;
		}
 ?>