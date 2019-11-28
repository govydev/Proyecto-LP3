<?php
require_once('../Controlador/distribuidorDAO.php');
require_once("../Estilo/scripts/scripts.php");
$elemento = distribuidorDAO::buscarId($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../Estilo/css/style_form.css">
    <title>Distribuidor</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Actualizar Distribuidor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="principal.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="lista_distribuidor.php">Distribuidor <span class="sr-only">(current)</span></a>
            </li>
        </ul>
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
</body>
</html>