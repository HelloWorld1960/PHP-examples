<?php
/*Conexion a base de datos*/
/*Utilizaremos metodos de la clase mysqli la cual es una clase nativa de php*/
class Conexion extends mysqli{

	/*Constructor*/
	public function __construct(){
		/*Acceder al constructor de la clase mysqli.
		 *parent:: Indica que se esta llamando a un metodo de la clase padre.*/
		parent::__construct('localhost','root','','proyecto_php-smarty');
		/*Garantizar que el envio de datos se realice con el cotejamoento UTF8.*/
		$this->query("SET NAMES 'utf8';");
		/*connect_errno devuelve TRUE si hay un error en la conexion*/
		$this->connect_errno ? die('Error en la conexion') : $x = 'Conectado';
		echo $x;
		/*unset() elimina variable o elemento de un array u objeto, en este caso se utiliza para liberar memoria.*/
		unset ($x);
	}
}
	//$db=new Conexion();
?>
