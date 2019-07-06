<?php
$longitud=5;
$miarreglo = array($longitud);

for ($i=0; $i < $longitud; $i++) {
	$miarreglo[$i]=$i*5;
}

for ($i=0; $i < $longitud; $i++) {
	echo $miarreglo[$i],'<br/>';
}

?>
