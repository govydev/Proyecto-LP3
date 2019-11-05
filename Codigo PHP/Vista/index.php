
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<?php require_once "scripts.php"; ?>
<title>Login</title>
</head>
<body style="background-color: gray">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">Login Tienda Goliat</div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<img src="../Estilo/imagenes/bodega.jpg" height="250" width="330">
					</div>
					<p></p>
					<label>Usuario</label>
					<input type="text" id="usuario" class="form-control input-sm" name="">
					<label>Password</label>
					<input type="text" id="password" class="form-control input-sm" name="">
					<p></p>
					<span class="btn btn-primary" id="entrarSistema">Entrar</span>
					<a href="#" class="btn btn-danger">Registro</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"./sesion/login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="principal.php";
							}else{
								alertify.alert("Fallo al entrar :(");
							}
						}
					});
		});	
	});
</script>