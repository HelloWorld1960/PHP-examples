<?php
function Mensaje()
{
	 $c = "Esto es un mensaje";
	 return ($c);
}

echo Mensaje();
echo "</br></br>";

function Sumar($a = 3, $b = 5)
{
	 return ($a + $b);
}

echo Sumar();
echo "</br></br>";

function Condicion($x)
{
	 if ($x == TRUE) {
			 $c = "La afirmacion es verdadera";
	 } else {
			 $c = "La afirmacion es falsa";
	 }
	 return ($c);
}


echo Condicion(TRUE);
echo "</br>";
echo Condicion(FALSE);
?>
