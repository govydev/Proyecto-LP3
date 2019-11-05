<?php 
	session_start();

	if(isset($_SESSION['usuario'])){
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../Estilo/css/style_principal.css">
    <link rel="stylesheet" type = "text/css" href="../Estilo/css/body.css">
    <?php require_once "scripts.php"; ?>
    <title>Principal</title>
</head>
<body class="principal">
    <h1 class="titulo">Bodega "Goliat"</h1>
        <form action="lista_distribuidor.php">
            <div class="centro">
                <button type="submit" class="btn btn-primary mb-2">Distribuidores</button>
            </div><br>
        </form>
        <form action="lista_producto.php">
            <div class="centro">
                <button type="submit" class="btn btn-primary mb-2">Productos</button>
            </div><br>
        </form>
        <form action="lista_h_compra.php">
            <div class="centro">
                <button type="submit" class="btn btn-primary mb-2">Historial de Compras</button>
            </div><br>
        </form>
        <form action="lista_h_venta.php">
            <div class="centro">
                <button type="submit" class="btn btn-primary mb-2">Historial de Ventas</button>
            </div><br>
        </form>
        
</body>
</html>
<?php
} else {
	header("location:index.php");
	}
 ?>
