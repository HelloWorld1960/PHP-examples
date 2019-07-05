<?php
/*isset() retorna true si la variable esta definida.*/
if (isset($_GET['error'])) {
	if ($_GET['error']==1) {
			echo "Tienes que completar los campos";
		}else if ($_GET['error']==2) {
			echo "Usuario y contraseña incorrectos";
		}else if ($_GET['error']==3) {
			echo "No intentes saltarte el formulario";
		}else if ($_GET['error']==4) {
			echo "No puedes acceder sin iniciar sesion";
		}else if ($_GET['error']==5) {
			echo "Sesion cerrada exitosamente";
		}
	unset($_GET['error']);/*Cerrar sesion*/
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acceso usuario</title>
</head>
<body>

<form action="login.php" method="POST">
	<label>Usuario</label><input type="text" name="user"/></br>
	<label>Contraseña</label><input type="text" name="pass"/></br>
	<label><input type="checkbox" name="sesion" value="1" />Recordar mis datos</label></br>
	<input type="submit" value="click here">
</form>

</body>
</html>
