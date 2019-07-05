<?php
include ('class.Primera.php');
include ('class.Segunda.php');

/*Instancia*/
$objeto = new Segunda('Estoy llamando a la instancia segunda','Esto es de mi segundo parametro');
/*Llamando metodos*/
$objeto->Imprimir();
?>
