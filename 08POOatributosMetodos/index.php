<?php
class Automovil{
	/*Atributos.*/
	private $color;
	private $velocidad;
	private $motor;

	/*Metodos.*/
	public function Arrancar($a, $b){
		/*Con this-> hacemos referencia a el atributo de la clase*/
		$this->velocidad = $a;
		$this->motor = $b;
		echo 'Arrancar a la velocidad de '.$this->velocidad.' ya que su motor es '.$this->motor;
	}

	public function DeterminarColor($color){
		$this->color=$color;
		echo ' y tiene un color '. $this->color;
	}

	public function Frenar(){
		echo ', Ahora ha frenado';
	}

}

	/*Programa principal.*/
	echo "<strong>Ferrari</strong></br>";
	/*Creamos una instancia (cuando definimos un objeto)*/
	$ferrari = new Automovil();
	/*Llamando metodos.*/
	$ferrari->Arrancar('300km/h','V8');
	$ferrari->DeterminarColor('Rojo');
	$ferrari->Frenar();

	echo "</br></br>";

	echo "<strong>Porche</strong></br>";
	$porche=new Automovil(); //Instancia.
	$porche->Arrancar('250km/h','V12');
	$porche->DeterminarColor('Negro');
	$porche->Frenar();
?>
