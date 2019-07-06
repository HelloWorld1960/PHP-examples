<?php
include('class.Conexion.php');

class Sugerencias{
	/*Atributos*/
	public $buscador;

	/*Metodos*/
	public function Buscar($a){
		/*mysqli_real_escape_string() escapa los caracteres especiales de una cadena para usarla en una sentencia SQL.*/
		/*$sql extrae toda la informacion de la tabla autos.
		 *query() realiza una consulta a la BD. Para el éxito de consultas SELECT, SHOW, DESCRIBE, o EXPLAIN devolverá un objeto mysqli_result. Para otras consultas correctas devolverá TRUE. En caso de fallo FALSE*/
		/*Like se usa para hallar coincidencias dentro de una cadena bajo un patron dado.
		 *'%".$q."%' indica que si $q coincide en cualquier posicion de dicha consulta. */
		$db = new Conexion();
		$this->buscador = $db->real_escape_string($a);
		$sql = $db->query("SELECT * FROM autos WHERE nombre LIKE '%".$this->buscador."%';");

		while ($array = $db->Recorrer($sql)) {
			$resultado[] = $array['nombre'];
		}

		return $resultado;
	}
} //End class Sugerencias().


/*json_encode() Convierte objetos a un formato JSON*/
$busqueda = new Sugerencias();
echo json_encode($busqueda->Buscar($_GET['term']));

?>
