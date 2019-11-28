<?php require_once("../Estilo/scripts/scripts.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Estilo/css/style_principal.css">    
    <title>Principal</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo" id="demo" onclick="TituloColor()">Tienda "Goliat"</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="../Estilo/imagenes/icono_producto.png" class="card-img-top img-fluid" alt="">
                </div>
                <div class="card-block">
                    <h3 class="card-tittle">Producto</h3>
                    <p class="card-text">Aqui encuentras las opciones referentes a los productos de la tienda</p>
                    <a data-fancybox data-type="iframe" data-src="lista_producto.php" href="javascript:;" class="btn btn-outline-success btn-block">Ingresar >></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="../Estilo/imagenes/icono_distribuidor.png" class="card-img-top img-fluid" alt="">
                </div>
                <div class="card-block">
                    <h3 class="card-tittle">Distribuidor</h3>
                    <p class="card-text">Informacion referente a todos los distribuidores de los cuales se compra regularmente</p>
                    <a data-fancybox data-type="iframe" data-src="lista_distribuidor.php" href="javascript:;" class="btn btn-outline-success btn-block">Ingresar >></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="../Estilo/imagenes/icono_h_venta.png" class="card-img-top img-fluid" alt="">
                </div>
                <div class="card-block">
                    <h3 class="card-tittle">Historial de Ventas</h3>
                    <p class="card-text">Manten un control sobre cuando, como y a que hora se vende cada producto</p>
                    <a data-fancybox data-type="iframe" data-src="lista_h_venta.php" href="javascript:;" class="btn btn-outline-warning btn-block">Ingresar >></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="../Estilo/imagenes/icono_h_compra.png" class="card-img-top img-fluid" alt="">
                </div>
                <div class="card-block">
                    <h3 class="card-tittle">Historial de Compra</h3>
                    <p class="card-text">Manten un control sobre cuanto, como y a que hora llegan los pedidos del distribuidor</p>
                    <a data-fancybox data-type="iframe" data-src="lista_h_compra.php" href="javascript:;" class="btn btn-outline-warning btn-block">Ingresar >></a>
                </div>
            </div>
        </div>
    </div>
    <center>
    <br><a data-fancybox data-type="iframe" data-src="lista_boleta.php" href="javascript:;" class="btn btn-outline-warning">Boleta >></a>
    <br><div class="container">
            <input type="button" class="home" onclick="location.href='../index.php'">
    </div>
    </center>
</body>
</html>
<script>
function TituloColor() {
  document.getElementById("demo").style.color = "red";
}
</script>