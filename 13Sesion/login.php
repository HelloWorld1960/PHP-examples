<?php
/*user=admin*/
/*pass=1234*/

$user   = $_POST['user'];
$pass   = $_POST['pass'];
$sesion = $_POST['sesion'];

/*isset() retorna true si la variable esta definida.*/
if (isset($user) and isset($pass)) {
		/*empty() Determina si una variable está vacía*/
    if (empty($user) or empty($pass)) { /*Tienes que completar los campos.*/
        /*header(string,http_response_code) envia una cabecera http.*/
        header('location: index.php?error=1');
    } else {
        if ($user == 'admin' && $pass == '1234') { /*Usuario y contraseña correctos.*/
					/*session_start() Inicia una nueva sesión o reanudar la existente. Si no se escribe este metodo No podra utilizarse $_SESSION[].*/
						session_start();
            if ($sesion == 1) {
                /*ini_set() permite modificar los valores de el archivo ini de apache mientras el script se este ejecutando y con esto recordar el inicio de la sesion por un dia.*/
                ini_set(session . cookie_lifetime, time() + (60 * 60 * 24));
            }
						/*$_SESSION[] establece una variable global de sesion. Esta variable se guarda en el servidor, ademas manda una cookie con el tiempo de vida de la sesion*/
            $_SESSION['usuario'] = $user;
            header('location: accedido.php'); /*Redireccionar a accedido.php*/
        } else {/*Usuario o contraseña incorrectos*/
            header('location: index.php?error=2');
        }
    }
} else {
	/*header(string,http_response_code) envia una cabecera http. */
  header('location: index.php?error=3');
}
?>
