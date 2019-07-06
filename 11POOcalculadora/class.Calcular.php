<?php

class Calcular{
	/*Atributos*/
	protected $num;
	protected $num2;
	protected $resultado;

	/*Constructor*/
	public function __construct($a,$b){
		$this->num=$a;
		$this->num2=$b;
	}

	/*Metodos*/
	public function Sumar(){
		$this->resultado=$this->num + $this->num2;
		return $this->resultado;
	}
}

?>
