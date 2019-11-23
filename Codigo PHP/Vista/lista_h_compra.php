<?php
    require_once("../Modelo/h_compra.php");
    require_once("../Controlador/h_compraDAO.php");
    require_once("../Modelo/producto.php");
    require_once("../Controlador/productoDAO.php");
    require_once("../Modelo/distribuidor.php");
    require_once("../Controlador/distribuidorDAO.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type = "text/css" href="../Estilo/css/style_lista.css">
    <title>Historial de compras</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Historial de compra</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="principal.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search" name="busqueda">
        <select name="cat" class="form-control">
            <option value="p.nombre">Producto</option>
            <option value="d.nombre">Distribuidor</option>
            <option value="cantidad_compra">Cantidad de compra</option>
            <option value="total_compra">Total de compra</option>
            <option value="precio_compra">Precio de Compra</option>
            <option value="fecha_compra">Fecha de compra</option>
        </select>
        <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">
    </form>
  </div>
</nav>
<!-- falta agregar select con nombre de productos y distribuidores -->   
<div class="collapse" id="collapseNuevo">
    <div class="card card-body">
        <form method="POST" action="../Controlador/h_compraControlador.php?a=agregar&id">
            <div class="form-row">
                <div class="col-2">
                    <input type="num" class="form-control" placeholder="Precio de Compra" name="precio_compra">
                </div>
                <div class="col">
                    <input type="date" class="form-control"  name="fecha_compra" required>
                </div>
                <div class="col">
                    <input type="num" class="form-control" placeholder="Cantidad de compra" name="cantidad_compra" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Total de compras" name="total_compra" required>
                </div>
                <div class="col">
                    <select name="id_producto" id="" class="form-control">
                        <?php 
                            $producto = ProductoDAO::listarProducto();
                            foreach($producto as $elemento):?>
                            <option value="<?php echo $elemento[0]?>" class="form-control"><?php echo $elemento[1]?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- <input type="text" class="form-control" placeholder="Compra" name="id_producto" required> -->
                </div>
                <div class="col">
                    <select name="id_distribuidor" id="" class="form-control">
                        <?php 
                            $producto = DistribuidorDAO::listarDistribuidor();
                            foreach($producto as $elemento):?>
                            <option value="<?php echo $elemento[0]?>" class="form-control"><?php echo $elemento[1]?></option>
                        <?php endforeach; ?>
                    </select>
                        <!-- <input type="text" class="form-control" placeholder="Distribuidor" name="id_distribuidor" required> -->
                </div>
                <div class="col-auto">
                    <input class="btn btn-primary mb-2" type="submit" value="Guardar">
                </div>
            </div>
        </form>
    </div>
</div>
<!--falta agregar en la lista,nuevo y actualizar los productos y distribuidores -->
<form method="get">
    <table class="table" style="text-align: center">
        <thead class="thead-dark" >
            <tr>
                <th scope="col">Poducto</th>
                <th scope="col">Distribuidor</th>
                <th scope="col">Cantidad de Compra</th>
                <th scope="col">Total de Compra</th>
                <th scope="col">Precio de Compra</th>
                <th scope="col">Fecha de Compra</th>
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
                    $datos = HCompraDAO::listarHCompra();
               else
                    $datos = HCompraDAO::buscar($_POST["busqueda"],$_POST["cat"]);

                foreach($datos as $elemento):?>
                <tr>
                    <td ><?php echo $elemento[1]?></td>
                    <td ><?php echo $elemento[2]?></td>
                    <td ><?php echo $elemento[3]?></td>
                    <td ><?php echo $elemento[4]?></td>
                    <td ><?php echo $elemento[5]?></td>
                    <td ><?php echo $elemento[6]?></td>
                    <td >
                        <a class="btn btn-outline-info" href="form_h_compra.php?id=<?=$elemento[0]?>">
                            Actualizar
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-outline-info" href="../Controlador/h_compraControlador.php?a=eliminar&id=<?=$elemento[0]?>" onclick="return confirm('¿Realmente quiere eliminar el dato?')">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</form>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>