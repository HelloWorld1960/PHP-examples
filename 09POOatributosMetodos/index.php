<?php
class Automovil{
	/*Atributos*/
	private $color;
	private $velocidad;
	private $motor;
	public $prueba;

	/*Metodos.*/
	public function Arrancar($a, $b){
		/*Con this-> hacemos referencia a el atributo de la clase*/
		$this->velocidad=$a;
		$this->motor=$b;
	echo 'Arrancar a la velocidad de '.$this->velocidad.' ya que su motor es '.$this->motor;
	}

	public function DeterminarColor($color){
		$this->color=$color;
		echo ' y tiene un color '. $this->color;
	}

	public function Frenar(){
		echo ', Ahora ha frenado';
	}

	public function MiMetodo($parametro){
		$this->prueba=$parametro;
	}

}/*Fin de la clase Automovil*/

	/*Programa principal.*/
	echo "<strong>Ferrari</strong></br>";
	/*Creamos una instancia (cuando definimos un objeto)*/
	$ferrari=new Automovil();
	/*Llamando metodos*/
	$ferrari->Arrancar('300km/h','V8');
	$ferrari->DeterminarColor('Rojo');
	$ferrari->Frenar();
	echo "</br>";
	$ferrari->prueba='Hola mundo';
	echo $ferrari->prueba;
	echo "</br>";

	$ferrari->MiMetodo('Jorge');
	echo $ferrari->prueba;

?>
