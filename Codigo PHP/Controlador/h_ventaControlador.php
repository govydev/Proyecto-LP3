<?php
    require_once("../Modelo/h_venta.php");
    require_once("h_ventaDAO.php");

    $accion = $_GET["a"];

    switch ($accion) {
        case 'agregar':
            $distribuidor = new HVentaDAO();
            $distribuidor->setHVenta($_POST["fecha_venta"],$_POST["cantidad_venta"],$_POST["total_venta"],$_POST["id_producto"]);
            $distribuidor->ingresarDato();
            break;
        case 'modificar':
            $distribuidor = new HVentaDAO();
            $distribuidor->setDistribuidor($_POST["fecha_venta"],$_POST["cantidad_venta"],$_POST["total_venta"],$_POST["id_producto"]);
            $distribuidor->editarDato($_POST["id"]);
            break;
        case 'eliminar':
            $distribuidor = new HVentaDAO();
            $id = $_GET["id"];
            $distribuidor->eliminarDato($id);
            break;
    }

    header ('Location:../Vista/lista_h_venta.php');

?>