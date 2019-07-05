<?php
/*vector asociativo:Se define (clave => valor).*/
echo "<strong>Array simple.</strong></br>";
$x = array(
	 'Daniel' => "Hombre",
	 'Maria' => "Mujer"
);
/*foreach(expresion as $value)*/
foreach ($x as $clave => $valor) {
	 echo ($clave . "::" . $valor);
	 echo "</br>";
}

echo "</br></br>";

echo "<strong>Array dentro de otro array.</strong></br>";
echo "<strong>Nombre | Sexo | ojos | altura</strong></br>";
$personas = array(
	 'Daniel' => array(
			 'sexo' => "Masculino",
			 'ojos' => "Negros",
			 'altura' => 1.80
	 ),
	 'Maria' => array(
			 'sexo' => "Femenino",
			 'ojos' => "Azul",
			 'altura' => 1.60
	 ),
	 'Jorge' => array(
			 'sexo' => "Masculino",
			 'ojos' => "Negros",
			 'altura' => 1.80
	 ),
	 'Fernando' => array(
			 'sexo' => "Masculino",
			 'ojos' => "Negros",
			 'altura' => 1.80
	 ),
	 'Hugo' => array(
			 'sexo' => "Masculino",
			 'ojos' => "Negros",
			 'altura' => 1.80
	 ),
	 'Cesar' => array(
			 'sexo' => "Masculino",
			 'ojos' => "Negros",
			 'altura' => 1.80
	 ),
	 'Rebeca' => array(
			 'sexo' => "Masculino",
			 'ojos' => "Negros",
			 'altura' => 1.80
	 )
);

foreach ($personas as $clave => $valor) {
	 echo $clave . " | " . $valor['sexo'] . " | " . $valor['ojos'] . " | " . $valor['altura'] . "</br>";
}
?>
