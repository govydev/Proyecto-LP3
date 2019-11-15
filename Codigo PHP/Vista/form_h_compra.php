<?php

require_once('../Controlador/h_compraDAO.php');
$elemento = HCompraDAO::buscarId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type = "text/css" href="../Estilo/css/style_form.css">
    <title>Historial de Compra</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Actualizar Historial de Compra</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="principal.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<center>
  <form action="../Controlador/h_compraControlador.php?a=modificar" method="POST">
    <div class="form-group">
      <input type="hidden" name="id" value = "<?= $elemento[0]?>">
    </div>
    <div class="form-group">
      <label >Precio de Compra</label>
      <input type="num" class="form-control" placeholder="Ingrese Precio" name="precio_compra" value = "<?= $elemento[1]?>" required>
    </div>
    <div class="form-group">
      <label >Fecha de Compra</label>
      <input type="date" class="form-control" name="fecha_compra" value = "<?= $elemento[2]?>" required>
    </div>
    <div class="form-group">
      <label >Cantidad de Compra</label>
      <input type="num" class="form-control" placeholder="Ingrese Cantidad de Compra" name="cantidad_compra" value = "<?= $elemento[3]?>" required>
    </div>
    <div class="form-group">
      <label >Total de Compra</label>
      <input type="num" class="form-control" placeholder="Ingrese Total de Compra" name="total_compra" value = "<?= $elemento[4]?>" required>
    </div>
    <div class="form-group">
      <label >Producto</label>
      <input type="num" class="form-control" placeholder="Ingrese Id Producto" name="id_producto" value = "<?= $elemento[5]?>" required>
    </div>
    <div class="form-group">
      <label >Distribuidor</label>
      <input type="num" class="form-control" placeholder="Ingrese Id Distribuidor" name="id_distribuidor" value = "<?= $elemento[6]?>" required>
    </div>
    <button type="submit" class="btn btn-outline-dark">Actualizar</button>
  </form>
</center>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>