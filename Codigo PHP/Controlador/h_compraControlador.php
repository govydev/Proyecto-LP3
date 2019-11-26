<?php
    require_once("../Modelo/h_compra.php");
    require_once("h_compraDAO.php");

    $accion = $_GET["a"];

    switch ($accion)
    {
        case 'agregar':
            $distribuidor = new HCompraDAO();
            $distribuidor->setHCompra($_POST["precio_compra"],$_POST["fecha_compra"],$_POST["cantidad_compra"],$_POST["total_compra"],$_POST["id_producto"],$_POST["id_distribuidor"]);
            $distribuidor->ingresarDato();
            break;
        case 'modificar':
            $distribuidor = new HCompraDAO();
            $distribuidor->setHcompra($_POST["precio_compra"],$_POST["fecha_compra"],$_POST["cantidad_compra"],$_POST["total_compra"],$_POST["id_producto"],$_POST["id_distribuidor"]);
            $distribuidor->editarDato($_POST["id"]);
            break;
        case 'eliminar':
            $distribuidor = new HCompraDAO();
            $id = $_GET["id"];
            $distribuidor->eliminarDato($id);
            break;
    }

    header ('Location:../Vista/lista_h_compra.php');

?>