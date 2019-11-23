<?php
require_once('../Controlador/distribuidorDAO.php');
$elemento = distribuidorDAO::buscarId($_GET['id']);
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
<style>
  .form-control-6{
    background-color: transparent;
    text-align: center;
  }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Actualizar Distribuidor</a>
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
  <form action="../Controlador/distribuidorControlador.php?a=modificar" method="POST">
      <div class="col-2">
        <input type="hidden" name="id" value = "<?= $elemento[0]?>">
      </div>
      <div class="col-2">
        <label >Nombre: </label><br>
        <input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombre" value = "<?= $elemento[1]?>" required>
      </div>
      <div class="col-2">
        <label >RUC: </label><br>
        <input type="text" class="form-control" placeholder="Ingrese RUC" name="ruc" value = "<?= $elemento[2]?>" required>
      </div>
      
      <br><button type="submit" class="btn btn-outline-dark">Actualizar</button>
  </form>
</center>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>