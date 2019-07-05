<?php
include ('class.Imprimir.php');

	/*Instancia*/
	$calculadora=new Imprimir(1,6);
	/*Llamando metodos*/
	$calculadora->Sumar();

	echo "</br><strong>Estatico</strong></br>";
	include ('class.Estatico.php');
	/*Instancia*/
	$objeto=new Estatico('Esto es lo del estatico');
	/*Llamando metodos*/
	echo $objeto->Impreso();

	/*Hay que tener en cuenta que un método estático no puede acceder a los atributos de la clase, ya que un método estático normalmente se lo llama sin crear un objeto de dicha clase.
	*La sintaxis para llamar al metodo estatico es nombreClase::metodo();*/
	echo Estatico::ImpresoDos('Esto es lo que paso por static function</br>');
 ?>
