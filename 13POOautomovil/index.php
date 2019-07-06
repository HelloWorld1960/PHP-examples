<?php
  class Automovil {
  /*Atributos*/
  protected $color; /*PROTECTED- puedo utilizarlos como si fueran publicos y privados*/
  protected $velocidad;
  protected $motor;
  public $prueba;

  /*Metodos*/
  public function Arrancar($a,$b){
    $this->velocidad = $a;
    $this->motor = $b;
    echo 'Arranca a la velocidad de ' ,$this->velocidad,' ya que su velocidad es de ',$this->motor;
  }

  public function DeterminarColor($color){
    $this->color = $color;
    echo ' y tiene un color ',$this->color;
  }

  public function Frenar(){
    echo ' y ahora ha frenado';
  }

  public function MiMetodo($parametro){
    $this->prueba = $parametro;
    return $this->prueba;
  }
  }

  /*Uso de herencia y constructores*/
  class Moto extends Automovil{
    /*Atributos*/
    private $ruedas;

    /*Constructor*/
    public function __constructor($ruedas_cantidad,$velocidad,$cilindros,$color){
      $this->ruedas = $ruedas_cantidad;
      $this->velocidad = $velocidad;
      $this->motor = $cilindros;
      $this->color = $color;
    }

    public function Ruedas($parametro){ #Uso de herencia
      $this->ruedas=$parametro;
      return $this->ruedas;
    }

    public function Color(){
      return $this->color;
    }

    public function Todo(){
    echo 'Esta es la nueva velocidad: ',$this->velocidad,'este es el nuevo motor:',$this->motor,'Esta es la cantidad de ruedas: ',$this->ruedas,' ';
    }
  }



echo '<h1>Auto Ferrari</h1>';
  /*Crear una instancia*/
  $ferrari = new Automovil();
  $ferrari->Arrancar('200 km/h','12 cilindros');
  $ferrari->DeterminarColor('Rojo');
  $ferrari->Frenar();
  echo $ferrari->MiMetodo(' Hola Mundo');

  echo'<br /><br />';

  echo '<h1>Auto Porche</h1>';
  /*Crear nueva instancia*/
  $porche = new Automovil();
  $porche->Arrancar('300 km/h','6 cilindros');
  $porche->DeterminarColor('Negro con fibra de carbomo');
  $porche->Frenar();

  echo'<br /><br />';

  echo '<h1>Moto Suzuki</h1>';
  /*Crear una instancia*/
  $Suzuki = new Moto();
  echo 'La moto tiene ', $Suzuki->Ruedas(2), 'ruedas <br />';
  $Suzuki->Arrancar('100 km/h','3 cilindros');
  $Suzuki->DeterminarColor('Azul');
  $Suzuki->Frenar();

  echo '<h1>Moto Yamaha</h1>';
  /*Crear una instancia*/
  $Yamaha = new Moto(2,'160 km/h','6 cilindros','Azul');
  echo $Yamaha->Color(),'<br />';
  $Yamaha->Todo();
  $Yamaha->Frenar();

  ?>
