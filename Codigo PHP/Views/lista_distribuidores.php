<?php 
    include("../Models/distribuidores.php");
    $DId = $_GET["Id"];
    $Nruc = $_GET["ruC"];
    $Nnom = $_GET["nom"];

    $distribuidor = new Distribuidor();
    $array_distribuidor = $distribuidor->listar_distribuidores();
    $distribuidor->delete_distribuidor($DId);
    $distribuidor->create_distribuidor($Nnom, $Nruc);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../css/style_distribuidor.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Distribuidores</title>
</head>

<body >

    <nav class="navbar navbar-dark bg-dark">
        <h1 class="titulo">Distribuidores</h1>
        
            <div class="btext">
            <input type="text" class="boxtext" id="inlineFormInput" placeholder="">
            </div>

            <div class='select'>
                <select name="" id="" class="selector">
                    <option value="value1">RUC</option>
                    <option value="value1">Nombre</option>
                </select>
            </div>

            <div class='btn'>
            <button type="button" class="btn btn-light">Buscar</button>
            </div>
                
    </nav><br><br>

            <div class="collapse" id="collapseActualizar">
                <div class="card card-body">
                    <form>
                        <div class="form-row">
                            <div class="col-7">
                                <input type="text" class="form-control" placeholder="RUC">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="collapse" id="collapseNuevo">
                <div class="card card-body">
                    <form method="get" action="principal.php">
                        <div class="form-row">
                            <div class="col-7">
                                <input type="text" class="form-control" placeholder="RUC" name="ruC">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre" name="nom">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <form method="get">
                <table class="table" >
                    <thead class="thead-dark" >
                        <tr>
                            <th scope="col">RUC</th>
                            <th scope="col">Nombre</th>
                            <th colspan="2" scope="col" >
                                <p>
                                    <a class="btn btn-dark" data-toggle="collapse" href="#collapseNuevo" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Nuevo
                                    </a>
                                </p >
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($array_distribuidor as $elemento):?>
                        <tr>
                        <td ><?php echo $elemento['nombre']?></td>
                        <td ><?php echo $elemento['ruc']?></td>
                        <td >
                            <p>
                                <a class="btn btn-primary" data-toggle="collapse" href="#collapseActualizar" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Actualizar
                                </a>
                            </p >
                        </td>
                        <td>
                            <a href="principal.php?Id=<?php echo $elemento['id_distribuidor']?>">Eliminar</a>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
                
        
        
    

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>