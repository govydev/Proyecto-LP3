<?php
    require_once("../Modelo/h_compra.php");
    require_once("../Controlador/h_compraDAO.php");
    require_once("../Modelo/producto.php");
    require_once("../Controlador/productoDAO.php");
    require_once("../Modelo/distribuidor.php");
    require_once("../Controlador/distribuidorDAO.php");
    require_once("../Estilo/scripts/scripts.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <input class="btn btn-outline-secondary my-2 my-sm-0" type="submit" value="Buscar">
        </form>
    </div>
</nav>
   
<div class="collapse" id="collapseNuevo">
    <div class="card card-body">
        <form method="POST" action="../Controlador/h_compraControlador.php?a=agregar&id">
            <div class="form-row">
                <div class="col-2">
                    <input type="num" class="form-control" placeholder="Precio de Compra" id="precio_compra" name="precio_compra" required>
                </div>
                <div class="col">
                    <input type="date" class="form-control" id="fecha_compra"  name="fecha_compra" required>
                </div>
                <div class="col">
                    <input type="num" class="form-control" placeholder="Cantidad de compra" id="cantidad_compra" name="cantidad_compra" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Total de compras" id="total_compra" name="total_compra" required>
                </div>
                <div class="col">
                    <select name="id_producto" id="" class="form-control">
                        <?php 
                            $producto = ProductoDAO::listarProducto();
                            foreach($producto as $elemento):
                        ?>
                        <option value="<?php echo $elemento[0]?>" class="form-control"><?php echo $elemento[1]?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <select name="id_distribuidor" id="" class="form-control">
                        <?php 
                            $producto = DistribuidorDAO::listarDistribuidor();
                            foreach($producto as $elemento):
                        ?>
                            <option value="<?php echo $elemento[0]?>" class="form-control"><?php echo $elemento[1]?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="col-auto">
                    <input class="btn btn-dark mb-2" type="submit" value="Guardar" onclick="validar()">
                </div>
            </div>
        </form>
    </div>
</div>

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
                    $datos = HCompraDAO::listarHCompra();
               else
                    $datos = HCompraDAO::buscar($_POST["busqueda"],$_POST["cat"]);

                foreach($datos as $elemento):
            ?>
            <tr>
                <td ><?php echo $elemento[1]?></td>
                <td ><?php echo $elemento[2]?></td>
                <td ><?php echo $elemento[3]?></td>
                <td ><?php echo $elemento[4]?></td>
                <td ><?php echo $elemento[5]?></td>
                <td ><?php echo $elemento[6]?></td>
                <td >
                    <a class="btn btn-outline-dark"" href="form_h_compra.php?id=<?=$elemento[0]?>">
                        Actualizar
                    </a>
                </td>
                <td>
                    <a class="btn btn-outline-dark" href='../Controlador/h_compraControlador.php?a=eliminar&id=<?=$elemento[0]?>' onclick="return confirm('¿Realmente quiere eliminar el dato?')">
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
        if($("#precio_compra").val() == ""){
            alertify.alert("Precio","El campo Precio de Compra no puede estar vacío.");
            $("#precio_compra").focus();// Esta función coloca el foco de escritura sobre el campo.
            return false;
        }
        if($("#fecha_compra").val() == ""){
            alertify.alert("Fecha de Compra","El campo Fecha de Compra no puede estar vacío.");
            $("#fecha_compra").focus();
            return false;
        }
        if($("#cantidad_compra").val() == ""){
            alertify.alert("Cantidad de Compra","El campo Cantidad de Compra no puede estar vacío.");
            $("#cantidad_compra").focus();
            return false;
        }
        if($("#total_compra").val() == ""){
            alertify.alert("Total de Compra","El campo Total de Compra no puede estar vacío.");
            $("#total_compra").focus();
            return false;
        }
        return true;  //Si todo está correcto
    }
</script>