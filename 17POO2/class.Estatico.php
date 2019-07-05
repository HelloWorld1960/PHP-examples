<?php

class Estatico{
	/*Atributos*/
	private $propiedad;

	/*Constructor*/
	public function __construct($parametro){
		$this->propiedad = $parametro;
	}

	/*Metodos.*/
	public function Impreso(){
		return $this->propiedad;
	}

	/*Un método estático pertenece a la clase pero no puede acceder a los atributos de una instancia. La característica fundamental es que un método estático se puede llamar sin tener que crear un objeto de dicha clase.*/
	public static function ImpresoDos($algo){
		return $algo;
	}
}

?>
