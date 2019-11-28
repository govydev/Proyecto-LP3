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
    <title>Document</title>
</head>
<body>
    <form method="POST" action="../Controlador/boletaControlador.php?a=agregar">
        <table class="table" style="text-align: center">
            <thead class="thead-dark" >
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Agregar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $datos = ProductoDAO::listarProducto();
                    foreach($datos as $elemento):
                ?>
                <tr>
                    <td><p id="producto" name="id_producto" value="<?php echo $elemento[0]?>"><?php echo $elemento[1]?></p></td>
                    <td><p id="total_venta"><?php echo $elemento[4]?></p></td>
                    <td><input type="number" name="cantidad_venta" placeholder="Cantidad"/></td>
                    
                    <td><input class="btn btn-dark mb-2" type="submit" value="Guardar"></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <input type="hidden" name="fecha_venta" value="<?php echo date("Y").'/'.date("m").'/'.date("d") ?>">
    </form>
    <script src="../Estilo/alertifyjs/alertify.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript">
    $(function(){
	$("#agrega").click(function(){
        if($('#cantidad').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
        }return true;
        cadena="producto=" + $('#producto').val() +
					"&precio=" + $('#precio').val() +
					"&cantidad=" + $('#cantidad').val();

					$.ajax({
						type:"POST",
						url:"../Codigo PHP/Controlador/boletaControlador.php",
						data:cadena,
						success:function(r){
                            alertify.success("Agregado con exito");    
						}
					});
  })
})
</script>