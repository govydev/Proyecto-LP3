<?php
    include("../Models/productos.php");
    $Nnom = isset($_POST['nom']) ? $_POST['nom'] : null ;
    $Nstk = isset($_POST['stk']) ? $_POST['stk'] : null ;
    $Nfv = isset($_POST['fv']) ? $_POST['fv'] : null ;
    $Npv = isset($_POST['pv']) ? $_POST['pv'] : null ;
    $producto = new Producto();
    $array_producto = $producto->listar_productos();
    $producto->create_producto($Nnom, $Nstk, $Nfv, $Npv);