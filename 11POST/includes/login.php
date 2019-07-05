<?php
/*user=admin*/
/*pass=1234*/

$user=$_POST['user'];
$pass=$_POST['pass'];

if (empty($user) or empty($pass)) {
	echo "Tienes que completar los campos";
}else{
	if ($user =='admin' && $pass=='1234') {
	echo "Usuario y contraseña correctos";
	}else{
		echo "Usuario o contraseña incorrectos";
		}
}
?>
