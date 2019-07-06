<?php
include ('class.Modelo.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Arrays</title>
  </head>
  <body>

  	<p>
  		<?php
  			$modelo = new Modelo();
  			$numeroElementos = $modelo->numElementos();

  			echo "El numero de carpetas en /Folder es: ",$numeroElementos,'<br/>';

  			$modelo->nombreCarpetas($numeroElementos);
  		?>
  	</p>

  </body>
</html>
