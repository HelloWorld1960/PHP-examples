<?php
/*Asi se borran las cookies
 *setcookie(name,value,expire,path,domain,secure,httponly) define una cookie que se enviara junto con el resto de las cabeceras HTTP.*/
setcookie('color','red',time()-(60*60),'/');

 ?>
