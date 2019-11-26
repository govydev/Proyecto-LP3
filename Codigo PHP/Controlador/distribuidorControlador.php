<?php
    require_once("../Modelo/distribuidor.php");
    require_once("distribuidorDAO.php");

    $accion = $_GET["a"];

    switch ($accion)
    {
        case 'agregar':
            $distribuidor = new DistribuidorDAO();
            $distribuidor->setDistribuidor($_POST["nombre"],$_POST["ruc"]);
            $distribuidor->ingresarDato();
            break;
        case 'modificar':
            $distribuidor = new DistribuidorDAO();
            $distribuidor->setDistribuidor($_POST["nombre"],$_POST["ruc"]);
            $distribuidor->editarDato($_POST["id"]);
            break;
        case 'eliminar':
            $distribuidor = new DistribuidorDAO();
            $id = $_GET["id"];
            $distribuidor->eliminarDato($id);
            break;
    }

    header ('Location:../Vista/lista_distribuidor.php');

?>