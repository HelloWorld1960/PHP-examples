<?php
include ('class.Calcular.php');
/*Clase hija de la clase Calcular*/
class Imprimir extends Calcular{
	/*Metodos*/
	public function Sumar(){
		/*parent:: Indica que se esta llamando a un metodo de la clase padre.*/
		parent::Sumar();
		echo $this->num,"+",$this->num2,"=</br>";
		echo "El resultado es ",$this->resultado,"</br>";
	}
}
?>
