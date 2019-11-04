<?php
include("../Models/distribuidores.php");
//$variable = isset($_GET['variable']) ? $_GET['variable'] : null ;
$Nruc = isset($_POST['ruC']) ? $_POST['ruC'] : null ;
$Nnom = isset($_POST['nom']) ? $_POST['nom'] : null ;
$distribuidor = new Distribuidor();
$array_distribuidor = $distribuidor->listar_distribuidores();
//$distribuidor->delete_distribuidor($DId);
$distribuidor->create_distribuidor($Nnom, $Nruc);
