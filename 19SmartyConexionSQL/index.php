<!-- Smary es un motor de plantillas para separa el codigo del diseño -->
<?php
include('includes/comunes.php');
require('includes/class.Conexion.php');
/*Crear conexion*/
$db=new Conexion();
/*Crear vista*/
$template=new Proyecto();
/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
$template->assign(array(
	'variable'=>'Hola mundo',
	'variable2'=>'Hola soy variable2'
));

/*display() Despliega el Template.*/
$template->display('public/index.tpl');
?>
