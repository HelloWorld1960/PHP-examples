<?php
/*user=admin*/
/*pass=1234*/
$user=$_GET['user'];
$pass=$_GET['pass'];


if (empty($user) or empty($pass)) {
	echo "Tienes que completar los campos";
}else{
	if ($user =='admin' && $pass=='1234') {
	echo "Usuario y contraseña correctos </br>";
	echo 'Usuario: ',$user, ' :: Pasword: ', $pass;
	}else{
		echo "Usuario o contraseña incorrectos";
		}
}




 ?>
