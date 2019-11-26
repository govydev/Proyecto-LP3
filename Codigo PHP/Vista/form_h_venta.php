<?php
require_once('../Controlador/h_ventaDAO.php');
require_once("../Modelo/producto.php");
require_once("../Controlador/productoDAO.php");
$elemento = HVentaDAO::buscarId($_GET['id']);
$producto = ProductoDAO::listarProducto();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type = "text/css" href="../Estilo/css/style_form.css">
    <title>Historial de Ventas</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Actualizar Historial de Venta</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="principal.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="lista_h_venta.php">Historial de Ventas <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<center>
    <form action="../Controlador/h_ventaControlador.php?a=modificar" method="POST">
        <div class="form-group">
            <input type="hidden" name="id" value = "<?= $elemento[0]?>">
        </div>
        <div class="col-2">
            <label >Producto ("<?=$elemento[1]?>")</label>
            <select name="id_producto" id="" class="form-control">
            <?php foreach($producto as $prdto):?>
                <option value="<?= $prdto[0]?>"><?= $prdto[1]?></option>
            <?php endforeach;?>
            </select>
        </div>
        <div class="col-2">
            <label >Cantidad de Venta</label>
            <input type="num" class="form-control" placeholder="Ingrese Cantidad de Venta" name="cantidad_venta" value = "<?= $elemento[2]?>" required>
        </div>
        <div class="col-2">
            <label >Total de Venta</label>
            <input type="num" class="form-control" placeholder="Ingrese Total de Venta" name="total_venta" value = "<?= $elemento[3]?>" required>
        </div>
        <div class="col-2">
            <label >Fecha de Venta</label>
            <input type="date" class="form-control" name="fecha_venta" value = "<?= $elemento[4]?>" required>
        </div>
        <br><button type="submit" class="btn btn-outline-dark">Actualizar</button>
    </form>
</center>   
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>