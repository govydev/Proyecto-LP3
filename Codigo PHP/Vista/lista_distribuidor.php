<?php 
    require_once("../Modelo/distribuidor.php");
    require_once("../Controlador/distribuidorDAO.php");
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../JavaScript/ajax_distribuidor.js" type="text/javascript"></script>
    <link rel="stylesheet" type = "text/css" href="../Estilo/css/style_lista.css">
    <title>Distribuidores</title>
</head>

<body >

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Distribuidores</a>
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
            <option value="nombre">Nombre</option>
            <option value="ruc">RUC</option>
        </select>
      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">
    </form>
  </div>
</nav>

<div class="collapse" id="collapseNuevo">
    <div class="card card-body">
        <form method="POST" action="../Controlador/distribuidorControlador.php?a=agregar&id">
            <div class="form-row">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="RUC" name="ruc" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                </div>
                <div class="col-auto">
                    <input class="btn btn-primary mb-2" type="submit" value="Guardar">
                </div>
            </div>
        </form>
    </div>
</div>

<form method="POST">
    <table class="table" style="text-align: center">
        <thead class="thead-dark" >
                <th scope="col">RUC</th>
                <th scope="col">Nombre</th>
                <th colspan="2" scope="col" >
                    <a  data-toggle="collapse" href="#collapseNuevo" class="btn btn-dark">
                        Nuevo
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : null ;
                if($busqueda=="" || $busqueda==null)
                    $datos = DistribuidorDAO::listarDistribuidor();
                else
                    $datos = DistribuidorDAO::buscar($_POST["busqueda"],$_POST["cat"]);

                foreach($datos as $elemento):?>
                <tr>
                    <td ><?php echo $elemento[1]?></td>
                    <td ><?php echo $elemento[2]?></td>
                    <td >
                        <a class="btn btn-outline-info" href="form_distribuidor.php?id=<?=$elemento[0]?>">
                            Actualizar
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-outline-info" href="../Controlador/distribuidorControlador.php?a=eliminar&id=<?=$elemento[0]?>" onclick="return confirm('¿Realmente quiere eliminar el dato?')">
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