<?php
	$p = "pertenece al array";
	$numeros = array(1,5,"Ivan",$p);

	echo 'EL indice [0] del arreglo es: ',($numeros[0])."</br>";
	echo 'EL indice [3] del arreglo es: ',($numeros[3])."</br>";

	echo "</br>";
	echo "<strong>Array asociativo</strong></br>";
	/*vector asociativo:Se define (clave => valor).*/
	$x=array(
		1 => "numero uno",
		'Ivan' => "hola mundo",
		'variable' => $p);

	echo ($x[1])."</br>";
	echo ($x['Ivan'])."</br>";
	echo ($x['variable']);
 ?>
