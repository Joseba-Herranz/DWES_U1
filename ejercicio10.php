<?php
/*
 * Ejercicio 10
 * El servidor recibirá un número. Tenemos que sacar por pantalla todos los números 
 * primos que hay desde el 1 hasta ese número.
*/

$numero=$_GET["num"];
$valor=$numero-1;


for ($x=$numero-1; $x>=0; $x--){
    do{
         $resto=($x % $valor);
          if($valor==2){
             echo " primo: " . $x . "</br>";
             break;
         }
         $valor--;
    }while($resto!=0);

}
?>