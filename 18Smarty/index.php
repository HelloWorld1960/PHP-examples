<!-- Smary es un motor de plantillas para separa el codigo del diseño -->
<?php
include ('includes/comunes.php');
	/*instancia de la vista*/
	/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
	/*display() Despliega el Template.*/
	$template = new Proyecto();
	$template->assign(array(
		'variable'=>'Hola mundo',
		'variable2'=>'Hola soy variable2'
	));
	$template->display('public/index.tpl');
?>
