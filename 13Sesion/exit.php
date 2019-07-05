<?php
/*session_start() Inicia una nueva sesión o reanudar la existente. Si no se escribe este metodo No podra utilizarse $_SESSION[].*/
session_start();
/*isset() retorna true si la variable esta definida.*/
	if (isset($_SESSION['usuario'])) {
		/*session_start() Inicia una nueva sesión o reanudar la existente.
		 *session_destroy() Destruye toda la información registrada de una sesión.
		 *header(string,http_response_code) envia una cabecera http.*/
		session_start();
		session_destroy();
		header('location:index.php?error=5');
	}else if (!isset($_SESSION['usuario'])) {/*NO definida*/
		session_start();
		session_destroy();
		header('location:index.php?error=4');
	}


 ?>
