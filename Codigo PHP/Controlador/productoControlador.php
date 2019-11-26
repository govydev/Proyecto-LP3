<?php
    require_once("../Modelo/producto.php");
    require_once("productoDAO.php");

    $accion = $_GET["a"];

    switch ($accion)
    {
        case 'agregar':
            $producto = new ProductoDAO();
            $producto->setProducto($_POST["nombre"],$_POST["stock"],$_POST["fecha_vencimiento"],$_POST["precio_venta"]);
            $producto->ingresarDato();
            break;
        case 'modificar':
            $producto = new ProductoDAO();
            $producto->setProducto($_POST["nombre"],$_POST["stock"],$_POST["fecha_vencimiento"],$_POST["precio_venta"]);
            $producto->editarDato($_POST["id"]);
            break;
        case 'eliminar':
            $producto = new ProductoDAO();
            $id = $_GET["id"];
            $producto->eliminarDato($id);
            break;
    }

    header ('Location:../Vista/lista_producto.php');

?>