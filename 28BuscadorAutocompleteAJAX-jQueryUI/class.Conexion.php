<?php
/*Conexion a base de datos*/
/*Utilizaremos metodos de la clase mysqli la cual es una clase nativa de php*/
class Conexion extends mysqli{
	//Constructor.
	public function __construct(){
		/*Acceder al constructor de la clase mysqli.
		 *parent:: Indica que se esta llamando a un metodo de la clase padre.*/
		parent::__construct('localhost','root','','php-buscador-sugerencias');
		/*Garantizar que el envio de datos se realice con el cotejamoento UTF8*/
		$this->query("SET NAMES 'utf8';");
		/*connect_errno devuelve TRUE si hay un error en la conexion*/
		$this->connect_errno ? die('Error en la conexion') : $x = 'Conectado';
		/*echo $x;*/
		/*unset() elimina variable o elemento de un array u objeto, en este caso se utiliza para liberar memoria.*/
		unset ($x);
	}

	//Metodos
	public function Recorrer($y){
		/*Extraer cada fila de la BD.*/
		/*mysqli_fetch_assoc() retorna un array asociativo de strings que representa a la fila obtenida del conjunto de resultados, donde cada clave del array representa el nombre de una de las columnas de de este. */
		return mysqli_fetch_array($y);
	}

	public function Rows($y){
		/*mysqli_num_rows() Retorna el número de filas de un conjunto de resultados.*/
		return mysqli_num_rows($y);
	}

}
	//$db=new Conexion();
?>
