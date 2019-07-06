<?php
	class Metodos{
		/* La clase Métodos es modelada mediante los descriptores de acceso:
		*set->asignación/reasignación de valores dependiendo de la información recibida por el método POST o GET.
		*get->lectura para el envío de la información recibida por dichos métodos. */

	 	/*Declaración de los atributos $variablePost y $variableGet con un modificador
	 	de acceso privado para no generar modificaciones en la instancia.
	 	Dichos atributos recibirán la información necesaria cuando se envien datos
	 	por los métodos POST y GET, dicha información será:
		*el tipo de método.
		*la dirección IP que realiza la petición.
		*texto en claro. */
		private $variablePost = null;
		private $variableGet = null;

		/*initPost() regresa la url actual del documento para que sea ejecutado
		el script del método POST o GET, se le asocia la función htmlentities cuyo
		objetivo es regreser solo elementos aplicables a entidades HTML evitando así
		ataques de XSS o inyección de caracteres no reconocidos*/
		public function initPost(){
			return htmlentities($_SERVER['PHP_SELF']);
		}

		/*setPost() asigna el valor del atributo variablePost, la referencia $this, como
		su aspecto lo indica hace referencia a un atributo de una MISMA clase,
		es como decir "asingale la información A_ESTE_ATRIBUTO"*/
		private function setPost(){
			$this->variablePost = "Método POST"." IP->".$_SERVER['REMOTE_ADDR'];
		}
		/*Función de LECTURA del atributo variablePost*/
		public function getPost(){
			return $this->variablePost;
		}

		/*setGET() asigna el valor del atributo variableGet*/
		private function setGET(){
			$this->variableGet = "Método GET"." IP->".$_SERVER['REMOTE_ADDR'];
		}
		/*Función de LECTURA del atributo variableGet*/
		public function getGET(){
			return $this->variableGet;
		}

		/*Esta función está a la escucha de los métodos recibidos en el documento
		donde se encuentran las condiciones para hacer llamados a los métodos POST y GET
		en este caso en forma de formularios, el arreglo $_SERVER con parámetro REQUEST_METHOD
		queda activo con un flag que siempre está recibiendo acciones de dichos métodos*/
		public function peticiones(){
		/*Atributos*/
		$metodo = $_SERVER['REQUEST_METHOD'];

			switch ($metodo):
			  case 'POST':
			  		$this->setPost();
			    	break;
			  case 'GET':
			  		$this->setGET();
			   	 	break;
			  default:
			    break;
			endswitch;

		}

	}
?>
