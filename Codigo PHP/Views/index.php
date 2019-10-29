<?php 
$LNom = $_GET["Lnom"];
$LPass = $_GET["Lpass"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type = "text/css" href="../css/style_login.css">
<link rel="stylesheet" type = "text/css" href="../css/body.css">

<title>Login</title>
</head>
<body class="login">
    <form action="principal.php" metohd="get">
        <div class="ex2">
            <h1 class='titulo'>Login</h1>
            <h2 class='casillas'>Usuario</h2>
            <input type="text" name="txtusuario" id="user" name="Lnom" >
            <h2 class='casillas'>Contraseña</h2>
            <input type="password" name="txtcontra" id="pass" name="Lpass"><br><br>
            <button type="submit" class="btn btn-primary mb-2">Iniciar Sesion</button><br><br>
        </div>
    </form>
    
</body>
</html>