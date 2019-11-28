<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="Estilo/css/style_index.css">
    <link rel="stylesheet" href="Estilo/alertifyjs/css/alertify.min.css" />
    <link rel="stylesheet" href="Estilo/alertifyjs/css/themes/default.min.css" />
    <title>Goliat</title>
</head>
<body>
    <a class="titulo" onclick="validar()">Bienvenido a Goliat</a>
    <script src="Estilo/alertifyjs/alertify.js"></script>
</body>
</html>
<script type="text/javascript">
    function validar(){
        alertify.prompt( 'Admministrador', 'Ingrese Clave de Acceso:', ''
                ,function(evt, value) {
                    if(value=="123"){
                        alertify.alert('Correcto', 'Ingresando...', function(){ window.location = 'Vista/principal.php' })
                    }else{
                        alertify.error('Error')
                    }
                }
                ,function() { alertify.error('Error') }

        ); 
        
    }
</script>