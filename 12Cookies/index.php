<?php
error_reporting(E_ALL ^ E_NOTICE);
/*$_REQUEST[] es un array asociativo que por defecto tiene el contenido de $_GET[], $_POST[] y $_COOKIE[]*/
$valorRadio=$_REQUEST['miradio'];
$color='';

if (!empty($_COOKIE['color'])) {
	$color=$_COOKIE['color'];
}

/*isset() retorna true si la variable esta definida.*/
if (isset($valorRadio)) {
	/*echo $valorRadio;*/
	/*setcookie(name,value,expire,path,domain,secure,httponly) define una cookie que se enviara junto con el resto de las cabeceras HTTP.
	 *header(string,http_response_code) envia una cabecera http. */
	if ($valorRadio==1) {
		setcookie('color','red',time()+(60*60),'/');
		header('location: index.php');
	}elseif ($valorRadio==2) {
		setcookie('color','blue',time()+(60*60),'/');
		header('location: index.php');
	}
}
?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Mis cookies</title>
 </head>
 <body style="background-color: <?php echo $color;  ?>;">

 <form action="index.php" method="POST">
 	<label><input type="radio" name="miradio" value="1"/> Elegir color rojo</label> </br>
 	<label><input type="radio" name="miradio" value="2"/> Elegir color azul</label> </br>
 	<input type="submit" value="Elegir color de fondo"/>
 </form>
</br>
</br>
<label>Valor de la cookie</label></br>
<label> <?php echo $_COOKIE['color']; ?> </label>

 </body>
 </html>
