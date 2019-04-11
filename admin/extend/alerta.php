<?php include '../conexion/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
	<title>Proyecto</title>
</head>
<body>
<?php 

	// recibimos las variables desde usuarios/ins_usuarios.php
	$mensaje= htmlentities($_GET['msj']);
	$c= htmlentities($_GET['c']);
	$p= htmlentities($_GET['p']);
	$t= htmlentities($_GET['t']);

	switch ($c) {
		case 'us':
			$carpeta =  '../usuarios/';
			break;
		case 'home':
			$carpeta =  '../inicio/';
			break;
		case 'salir':
			$carpeta =  '../';
			break;
		case 'pe':
			$carpeta =  '../perfil/';
			break;
		case 'cli':
			$carpeta =  '../clientes/';
				break;
		case 'prop':
			$carpeta =  '../propiedades/';
			break;
	}
	switch ($p) {
		case 'in':
			$pagina='index.php';
			break;
		case 'home':
			$pagina='index.php';
			break;
		case 'salir':
			$pagina='';
			break;
		case 'perfil':
			$pagina='perfil.php';
			break;
		case 'img':
			$pagina='imagenes.php';
			break;
		case 'can':
			$pagina='cancelados.php';
			break;
		case 'sl':
			$pagina='slider.php';
			break;

	}

	if (isset($_GET['id'])) {
		$id= htmlentities($_GET['id']);
		$dir = $carpeta.$pagina.'?id='.$id;
	}
	else{
		$dir = $carpeta.$pagina;	
	}



	$dir = $carpeta.$pagina;

	if ($t=="error") {
		$titulo = "¡Atención!";
	} else {
		$titulo = "¡Realizado! ";
	}

 ?>




<script src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>

<script >
		swal({
			  	title: '<?php echo $titulo ?>',
			  	text: "<?php echo $mensaje  ?>",
			  	type: '<?php echo $t ?>',
			  	confirmButtonColor: '#3085d6',
			  	confirmButtonText: 'Ok.'
			}).then(function (){
		  		location.href='<?php echo $dir ; ?>';
		});
		//deshabilitar enter y tecla esc y que direccione 
		$(document).click(function(){
			location.href='<?php echo $dir ; ?>';
		});

		$(document).keyup(function(e){
			if (e.which == 27) {
				location.href='<?php echo $dir ; ?>';
			}
		});

</script>

</body>
</html>