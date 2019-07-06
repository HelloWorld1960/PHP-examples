<?php
/*Conexion a base de datos*/
$connection = mysqli_connect("localhost", "root", "", "php-buscador-sugerencias");
/*$result extrae toda la informacion de la tabla autos.
*mysqli_query() realiza una consulta a la BD. Para el éxito de consultas SELECT, SHOW, DESCRIBE, o EXPLAIN devolverá un objeto mysqli_result. Para otras consultas correctas devolverá TRUE. En caso de fallo FALSE*/
$result = mysqli_query($connection,"SELECT * FROM autos");
$array = array();

if ($result) {
	while ($row = mysqli_fetch_array($result)) {
		/*utf8_encode() retorna una version codificada UTF-8*/
		/*array_push() Inserta uno o más elementos al final de un array*/
		$autos = utf8_encode($row['nombre']);
		array_push($array, $autos);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autocomplete</title>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.min.css">
</head>

<body>
	<script type="text/javascript">
		$(document).ready(function(){
			/*json_encode() Convierte objetos a un formato JSON*/
			var items = <?= json_encode($array) ?>
			/*El widget .autocomplete ({option1:value1, option2:value2 ...}) proporciona sugerencias mientras se escribe en el input.*/
  		/*source: ["sugerencia1","sugerencia2","sugerencia3","sugerencia4" ]*/
			/*select: function(event, ui) {} Este evento se activa cuando se selecciona un valor en el menu de autocompletar.*/
			$('#buscar').autocomplete({
				source:items,
				select: function(event,ui){
					/*$.get(URL,data,function(data,status,xhr),dataType) carga los datos del servidor usando una peticion GET usando el protocolo HTTP*/
					/*URL Dirección a la que se envía la petición.*/
					/*data Datos a enviar al servidor.*/
					/*function(data,status,xhr) Especifica una funcion a ejecutar si la peticion es exitosa.*/
					var params={
						autos:ui.item.value
					};
					$.get("getEquipo.php", params, function(response){
						console.log(response);
						/*JSON.parse() analiza el contenido de una cadena con formato JSON y retorna un objeto JavaScript*/
						var json = JSON.parse(response);
						if (json.status==200) {
							$("#nombre").html(json.nombre);
							$("#id").html(json.id);
							$("#precio").html(json.precio);
							$("#color").html(json.color);
						}
					});
				}
			});
		});
	</script>

	<form action="index.php" method="POST">
		<label>Buscar: </label><input type="text" name="buscar" id="buscar" />
		<input type="submit" value="Buscar"/>
	</form>
	<br/>
	<label>ID: </label><span id="id"></span> </br>
	<label>Auto:</label><span id="nombre"></span> </br>
	<label>Precio: </label><span id="precio"></span> </br>
	<label>Color: </label><span id="color"></span>

</body>
</html>
