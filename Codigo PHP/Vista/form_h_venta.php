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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type = "text/css" href="../Estilo/css/style_form.css">
    <title>Distribuidor</title>
</head>
<body>
<form>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Actualizar Historial de Venta</a>
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

<form action="../Controlador/h_ventaControlador.php?a=modificar" method="POST">
  <div class="form-group">
    <input type="hidden" name="id" value = "<?= $elemento[0]?>">
  </div>
  <div class="form-group">
    <label >Nombre</label>
    <input type="date" class="form-control" placeholder="Ingrese Nombre" name="fecha_venta" value = "<?= $elemento[1]?>" required>
  </div>
  <div class="form-group">
    <label >Stock</label>
    <input type="num" class="form-control" placeholder="Ingrese Stock" name="cantidad_venta" value = "<?= $elemento[2]?>" required>
  </div>
  <div class="form-group">
    <label >Fecha de Vencimiento</label>
    <input type="num" class="form-control" placeholder="Ingrese Fecha de Vencimiento" name="total_venta" value = "<?= $elemento[3]?>" required>
  </div>
  <div class="form-group">
    <label >Precio de Venta</label>
    <input type="num" class="form-control" placeholder="Ingrese Precio de Venta" name="id_producto" value = "<?= $elemento[4]?>" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>