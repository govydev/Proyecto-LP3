<?php 
    include("../Models/distribuidores.php");
    $distribuidor = new Distribuidor();
    $array_distribuidor = $distribuidor->listar_distribuidores();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../css/style_distribuidores.css">
    <link rel="stylesheet" type = "text/css" href="../css/body.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Distribuidores</title>
</head>
<body >
    <nav class="navbar navbar-dark bg-dark">
        <h1 class="titulo">Distribuidores</h1>
        <input type="text" class="busqueda" name="" id=""><br>
        <div >
            <input type="button" class="btn" value="Buscar">
            <select name="" id="" class="selector">
                        <option value="value1">RUC</option>
                        <option value="value1">Nombre</option>
            </select>
            
        </div>
    </nav><br><br>
        
            <table class="table" >
                <thead class="thead-dark" >
                    <tr>
                        <th scope="col">RUC</th>
                        <th scope="col">Nombre</th>
                        <th colspan="2" scope="col" ><a href="http://">Nuevo Distribuidor</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($array_distribuidor as $elemento):?>
                    <tr>
                    <td ><?php echo $elemento['nombre']?></td>
                    <td ><?php echo $elemento['ruc']?></td>
                    <td ><a href="http://">Actualizar</a></td>
                    <td><a href="http://">Eliminar</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        
        
    

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>