<?php
class Modelo{
  /*Atributos*/
  public $nElementos;
  public $arreglo;

  /*Metodos*/
  public function numElementos(){
  /*opendir(path,context) Abre un gestor de directorio para ser usado con llamadas posteriores como closedir(), readdir(), y rewinddir().*/
  /*path Es la ruta del directorio a ser abierta.*/
  $directorio = opendir("Folder/"); //ruta actual
  $nElementos = 0;
  /*readdir() Lee una entrada desde un gestor de directorio, retornando el nombre de la siguiente entrada del directorio en caso de EXITO. Las entradas son devueltas en el orden en que fueron almacenadas por el sistema de ficheros. */
    while ($archivo = readdir($directorio)){
      if ($archivo != '.' && $archivo != '..') { //indicamos que no lea el "." y los dos ".."
        /*is_dir() Devuelve TRUE si el nombre de archivo existe y es un directorio, FALSE si no. */
        if (is_dir("Folder/".$archivo)){
          $nElementos++;
        }
      }
    }
    return $nElementos;
  }


  public function nombreCarpetas($_numeElementos){
  $numeElementos = $_numeElementos;
  $arreglo = array($numeElementos);
  $i=0;

  /*opendir(path,context) Abre un gestor de directorio para ser usado con llamadas posteriores como closedir(), readdir(), y rewinddir().*/
  /*path Es la ruta del directorio a ser abierta.*/
  $directorio = opendir("Folder/");
    /*readdir() Lee una entrada desde un gestor de directorio, retornando el nombre de la siguiente entrada del directorio en caso de EXITO. Las entradas son devueltas en el orden en que fueron almacenadas por el sistema de ficheros. */
    while ($archivo = readdir($directorio)){
      if ($archivo != '.' && $archivo != '..') { //indicamos que no lea el "." y los dos ".."
        /*is_dir() Devuelve TRUE si el nombre de archivo existe y es un directorio, FALSE si no. */
        if (is_dir("Folder/".$archivo)){
          $arreglo[$i]=$archivo;
          $i++;
        }
      }
    }

    for ($i=0; $i < $numeElementos; $i++) {
      echo $arreglo[$i],'<br/>';
    }
  }

}
?>
