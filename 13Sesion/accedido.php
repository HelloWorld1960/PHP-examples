<?php
/*Recuperando datos de session_start para ver que sesion esta activa*/
/*session_start() Inicia una nueva sesión o reanudar la existente. Si no se escribe este metodo No podra utilizarse $_SESSION[].*/
session_start();
/*isset() retorna true si la variable esta definida.*/
if (isset($_SESSION['usuario'])) {/*Definida*/
	echo 'Bienvenido ' ,'<strong>',$_SESSION['usuario'],'</strong>', ' a esta nueva sesion';
}else if (!isset($_SESSION['usuario'])) {/*NO definida*/
	/*session_start() Inicia una nueva sesión o reanudar la existente.
	 *session_destroy() Destruye toda la información registrada de una sesión.
	 *header(string,http_response_code) envia una cabecera http.*/
	session_start();
	session_destroy();
	header('location:index.php?error=4');
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accedido</title>
</head>
<body>
</br>
</br>
<form action="exit.php" method="">
	<label>Cerrar sesion</label></br>
	<button type="submit" value="">Exit</button>
</form>
</body>
</html>
