<?php
    include("../Models/h_venta.php");
    $producto = new HVenta();
    $array_producto = $producto->listar_h_venta();