<?php
require_once('../Controlador/productoDAO.php');
require_once("../Estilo/scripts/scripts.php");
$elemento = productoDAO::buscarId($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../Estilo/css/style_form.css">
    <title>Productos</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" >Actualizar Productos</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="principal.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="lista_producto.php">Producto <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<center>
    <form action="../Controlador/productoControlador.php?a=modificar" method="POST">
        <div class="col-2">
            <input type="hidden" name="id" value = "<?= $elemento[0]?>">
        </div>
        <br><div class="col-2">
            <label >Nombre</label>
            <input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombre" value = "<?= $elemento[1]?>" required>
        </div>
        <br><div class="col-2">
            <label >Stock</label>
            <input type="text" class="form-control" placeholder="Ingrese Stock" name="stock" value = "<?= $elemento[2]?>" required>
        </div>
        <br><div class="col-2">
            <label >Fecha de Vencimiento</label>
            <input type="date" class="form-control" placeholder="Ingrese Fecha de Vencimiento" name="fecha_vencimiento" value = "<?= $elemento[3]?>" required>
        </div>
        <br><div class="col-2">
            <label >Precio de Venta</label>
            <input type="text" class="form-control" placeholder="Ingrese Precio de Venta" name="precio_venta" value = "<?= $elemento[4]?>" required>
        </div>
        <br><button type="submit" class="btn btn-outline-dark">Actualizar</button>
    </form>
</center>
</body>
</html>