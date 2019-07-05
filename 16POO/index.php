<?php
class Automovil{
	/*Atributos*/
	protected $color;
	protected $velocidad;
	protected $motor;
	public $prueba;

	/*Metodos*/
	public function Arrancar($a, $b){
		/*Con this-> hacemos referencia a el atributo de la clase*/
		$this->velocidad = $a;
		$this->motor = $b;
		echo 'Arrancar a la velocidad de '.$this->velocidad.' ya que su motor es '.$this->motor;
	}

	public function DeterminarColor($color){
		$this->color = $color;
		echo ' y tiene un color '. $this->color;
	}

	public function Frenar(){
		echo ', Ahora ha frenado';
	}

	public function MiMetodo($parametro){
		$this->prueba=$parametro;
	}

}/*Fin de la clase Automovil*/


/*Clase hija de la clase Automovil*/
class Moto extends Automovil{
	private $ruedas;

	/*Constructor*/
	public function __construct($nRuedas,$velocidad,$cilindros,$color){
		$this->ruedas=$nRuedas;
		$this->velocidad=$velocidad;
		$this->motor=$cilindros;
		$this->color=$color;
	}

	public function Color(){
		return $this->color;
	}

	public function Todo(){
		echo "Esta es la nueva velocidad ",$this->velocidad,
		', Esta es el nuevo motor ',$this->motor,
		', esta es la cantidad de ruedas ',$this->ruedas;
	}
}



echo "<strong>Ferrari</strong></br>";
/*Creamos una instancia de la clase (cuando definimos un objeto)*/
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


echo "</br></br>";
echo "<strong>Moto</strong></br>";
/*Creamos una instancia de la clase hija Moto y le pasamos parametros*/
$honda=new Moto(2,'160km/h','6 cilindros','azul');
echo $honda->Color(),"</br>";
$honda->Todo();
$honda->Frenar();

 ?>
