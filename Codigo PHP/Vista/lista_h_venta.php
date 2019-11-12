<?php

require_once('../Controlador/h_ventaDAO.php');
$elemento = HVentaDAO::buscarId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Historial de Ventas</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Historial de Venta</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="principal.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search" name="busqueda">
        <select name="cat" class="form-control">
            <option value="id_producto">Nombre</option>
            <option value="fecha_venta">Fecha de Venta</option>
            <option value="cantidad_venta">Cantidad de Venta</option>
            <option value="total_venta">Total de Venta</option>
        </select>
        <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">
    </form>
  </div>
</nav>

<div class="collapse" id="collapseActualizar">
    <div class="card card-body">
        <form>
            <div class="form-row">
                <div class="col-7">
                    <input type="text" class="form-control" placeholder="RUC">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
    
<div class="collapse" id="collapseNuevo">
    <div class="card card-body">
        <form method="POST" action="../Controlador/h_ventaControlador.php?a=agregar&id">
            <div class="form-row">
                <div class="col-7">
                    <input type="text" class="form-control" placeholder="fecha_venta" name="nombre">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Stock" name="stock">
                </div>
                <div class="col">
                    <input type="date" class="form-control" placeholder="Fecha de Vencimiento" name="fecha_vencimiento">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Precio de Venta" name="precio_venta">
                </div>
                <div class="col-auto">
                    <input class="btn btn-primary mb-2" type="submit" value="Guardar">
                </div>
            </div>
        </form>
    </div>
</div>

<form method="get">
    <table class="table" >
        <thead class="thead-dark" >
            <tr>
                <th scope="col">Fecha de venta</th>
                <th scope="col">Cantidad de venta</th>
                <th scope="col">Total de venta</th>
                <th scope="col">Id Producto</th>
                <th colspan="2" scope="col" >
                    <p>
                        <a class="btn btn-dark" data-toggle="collapse" href="#collapseNuevo" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Nuevo
                        </a>
                    </p >
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : null ;
                if($busqueda=="" || $busqueda==null)
                    $datos = HVentaDAO::listarHVenta();
               else
                    $datos = HVentaDAO::buscar($_POST["busqueda"],$_POST["cat"]);

                foreach($datos as $elemento):?>
                <tr>
                    <td ><?php echo $elemento[1]?></td>
                    <td ><?php echo $elemento[2]?></td>
                    <td ><?php echo $elemento[3]?></td>
                    <td ><?php echo $elemento[4]?></td>
                    <td >
                        <a class="btn btn-primary" href="form_producto.php?id=<?=$elemento[0]?>">
                            Actualizar
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="../Controlador/h_ventaControlador.php?a=eliminar&id=<?=$elemento[0]?>" onclick="return confirm('¿Realmente quiere eliminar el dato?')">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</form>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>