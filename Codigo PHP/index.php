<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="Estilo/css/style_index.css">
    <link rel="stylesheet" href="Estilo/alertifyjs/css/alertify.min.css" />
    <link rel="stylesheet" href="Estilo/alertifyjs/css/themes/default.min.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Goliat</title>
</head>
<body>
<nav class="sidebar-navigation">
	<ul>
		<li class="active">
        <i class="fa fa-sliders"></i>
			<span class="tooltip">Settings</span>
		</li>
	</ul>
</nav>
    <div class="centrar">
    <a class="titulo" onclick="validar()">Bienvenido a Goliat</a>
    </div>
    
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

<script type="text/javascript">
	$('ul li').on('click', function() {
	$('li').removeClass('active');
	$(this).addClass('active');
});
</script>
