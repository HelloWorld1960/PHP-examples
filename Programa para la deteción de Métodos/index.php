<?php
	/*Inclución del documento que contiene la clase métodos*/
	include('class.php');

	$metodos = new Metodos();
	$metodos->peticiones();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Programa para la deteción de Métodos</title>
		<link rel="stylesheet" href="style.css">
		</script>
	</head>

	<body>
		<section>
			<h1>Programa para la detección básica de envio de información sin REST-API</h1>
			<h2>Seleccione su método</h2>
			<h3>MÉTODO POST</h3>
				<form action="<?php echo $metodos->initPOST(); ?>" method="POST">
					<input type="text" name="textoPost" />
					<input type="submit" name="enviarPost" value="enviar" />
				</form>
			<h3>MÉTODO GET</h3>
				<form action="<?php echo $metodos->initPOST(); ?>" method="GET">
					<input type="text" name="textoPost" />
					<input type="submit" name="enviarPost" value="enviar" />
				</form>
				<p>Peticiones por método POST : <?php
					echo $metodos->getPost();
					/*isset() Comprueba si una variable esta definida y no es NULL. */
					/*strip_tags() Retira las etiquetas HTML y PHP de un string*/
					if(isset($_POST['enviarPost'])):
						echo " Texto->".strip_tags($_POST['textoPost']);
					endif;
				?></p>
				<p>Peticiones por método GET : <?php
					echo $metodos->getGET();
					/*isset() Comprueba si una variable esta definida y no es NULL. */
					/*strip_tags() Retira las etiquetas HTML y PHP de un string*/
					if(isset($_GET['enviarPost'])):
						echo " Texto->".strip_tags($_GET['textoPost']);
					endif;
				?></p>
		</section>
	</body>

</html>
