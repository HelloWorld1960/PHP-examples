<?php
$nombre = $_GET['autos'];
/*Conexion a base de datos*/
$connection = mysqli_connect("localhost", "root", "", "php-buscador-sugerencias");
/*$result extrae toda la informacion de la tabla autos.
*mysqli_query() realiza una consulta a la BD. Para el éxito de consultas SELECT, SHOW, DESCRIBE, o EXPLAIN devolverá un objeto mysqli_result. Para otras consultas correctas devolverá TRUE. En caso de fallo FALSE*/
$result = mysqli_query($connection,"SELECT * FROM autos WHERE nombre = '$nombre' LIMIT 1");
/*mysqli_num_rows() Retorna el número de filas de un conjunto de resultados.*/
if (mysqli_num_rows($result)>0) {
	/*mysqli_fetch_object() retorna la fila obtenida de un conjunto de resultados como un objeto. Donde los atributos del objeto representan los nombres de los campos encontrados en el conjunto de resultados. */
	$autos = mysqli_fetch_object($result);
	$autos->status = 200;
	/*json_encode() Convierte objetos a un formato JSON*/
	echo json_encode($autos);
}else{
	$error = array('status' => 400);
	/*json_encode() Convierte objetos a un formato JSON*/
	echo json_encode((object)$error);
}
?>
