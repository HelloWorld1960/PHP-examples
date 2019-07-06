<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Buscador con AJAX</title>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.min.css">
</head>

<body>

	<form action="index.php" method="POST">
		<label>Buscar: </label><input type="text" name="buscar" id="buscar"/>
		<input type="submit" value="Buscar"/>
	</form>


	<?php
	include('class.Conexion.php');
	//$db = new Conexion(); //Probando conexion.
	/*isset() retorna true si la variable esta definida.*/
	if (isset($_POST['buscar'])) {
		/*mysqli_real_escape_string() escapa los caracteres especiales de una cadena para usarla en una sentencia SQL.*/
		/*$sql extrae toda la informacion de la tabla usuarios.*/
		/*query() realiza una consulta a la BD.*/
		/*Like se usa para hallar coincidencias dentro de una cadena bajo un patron dado.
		 *'%".$filtro."%' indica que si $filtro coincide en cualquier posicion de dicha consulta. */
		$db = new Conexion();
		$filtro = $db->real_escape_string($_POST['buscar']);
		$sql = $db->query("SELECT * FROM autos WHERE nombre LIKE '%" .$filtro. "%';");

		if ($db->Rows($sql) > 0) { //Si el numero de filas retornadas por la consulta es mayor a cero...
			/*Imprimir resultados*/
			while ($auto = $db->Recorrer($sql)) {
				echo '[ID:',$auto['id'],'] ',$auto['nombre'],' color ',$auto['color'],' con precio de $',$auto['precio'],'.<br/>';
			}
		}else{/*Si hay 0 resultados, es por que no encontro nada*/
			echo "No se han encontrado resultados";
		}
	}else{
		echo "";
	}
	?>

<!-- Scripts -->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
