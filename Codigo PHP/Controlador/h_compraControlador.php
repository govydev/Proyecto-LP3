<?php
    include("../Models/h_compra.php");
    $producto = new HCompra();
    $array_producto = $producto->listar_h_compra();