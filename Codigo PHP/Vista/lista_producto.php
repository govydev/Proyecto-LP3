<?php
    require_once("../Modelo/producto.php");
    require_once("../Controlador/productoDAO.php");
    require_once("../Estilo/scripts/scripts.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../Estilo/css/style_lista.css">
    <title>Productos</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Productos</a>
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
                <option value="stock">Stock</option>
                <option value="fecha_vencimiento">Fecha de Venciento</option>
                <option value="precio_venta">Precio de Venta</option>
            </select>
            <input class="btn btn-outline-secondary my-2 my-sm-0" type="submit" value="Buscar">
        </form>
    </div>
</nav>
<div class="collapse" id="collapseNuevo">
    <div class="card card-body">
        <form method="POST" action="../Controlador/productoControlador.php?a=agregar&id">
            <div class="form-row">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" required>
                </div>
                <div class="col">
                    <input type="num" class="form-control" placeholder="Stock" id="stock" name="stock" required>
                </div>
                <div class="col">
                    <input type="date" class="form-control" placeholder="Fecha de Vencimiento" id="fecha_vencimiento" name="fecha_vencimiento" required>
                </div>
                <div class="col">
                    <input type="num" class="form-control" placeholder="Precio de Venta" id="precio_venta" name="precio_venta" required>
                </div>
                <div class="col-auto">
                    <input class="btn btn-dark mb-2" type="submit" value="Guardar" onclick="validar()">
                </div>
            </div>
        </form>
    </div>
</div>

<form method="POST">
    <table class="table" style="text-align: center">
        <thead class="thead-dark" >
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Stock</th>
                <th scope="col">Fecha de Vencimiento</th>
                <th scope="col">Precio de Venta</th>
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
                    $datos = ProductoDAO::listarProducto();
                else
                    $datos = ProductoDAO::buscar($_POST["busqueda"],$_POST["cat"]);

                foreach($datos as $elemento):
            ?>
            <tr>
                <td><?php echo $elemento[1]?></td>
                <td><?php echo $elemento[2]?></td>
                <td><?php echo $elemento[3]?></td>
                <td><?php echo $elemento[4 ]?></td>
                <td>
                    <a class="btn btn-outline-dark"" href="form_producto.php?id=<?=$elemento[0]?>">
                        Actualizar
                    </a>
                </td>
                <td>
                    <a class="btn btn-outline-dark"" href="../Controlador/productoControlador.php?a=eliminar&id=<?=$elemento[0]?>" onclick="return confirm('¿Realmente quiere eliminar el dato?')">
                        Eliminar
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</form>
</body>
</html>
<script type="text/javascript">
function validar(){
        // Campos de texto
        if($("#nombre").val() == ""){
            alertify.alert("Nombre","El campo Nombre no puede estar vacío.");
            $("#nombre").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
            return false;
        }
        if($("#stock").val() == ""){
            alertify.alert("Stock","El campo Stock no puede estar vacío.");
            $("#stock").focus();
            return false;
        }
        if($("#fecha_vencimiento").val() == ""){
            alertify.alert("Fecha de Vencimiento","El campo Fecha de Vencimiento no puede estar vacío.");
            $("#fecha_vencimiento").focus();
            return false;
        }if($("#precio_venta").val() == ""){
            alertify.alert("Precio de Venta","El campo Precio de Venta no puede estar vacío.");
            $("#precio_venta").focus();
            return false;
        }
        return true;  //Si todo está correcto
    }
</script>