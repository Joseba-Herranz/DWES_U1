<?php
/*
Ejercicio 01: Hacer un programa que contenga dos números 
distintos en sendas variables y los sume. A continuación 
mostrar el resultado de la suma, la resta la multiplicación, 
divisioón y módulo. Guarde como ejercicio01.php.
 */

 $n1=10;
 $n2=4;
 
 $sum= $n1+$n2 ;
 $rest= $n1-$n2;
 $mult= $n1*$n2;
 $div= $n1/$n2;
 $resto= $n1%$n2;
 
 echo "La suma: " . $n1 . " + " . $n2 . " = " . $sum;
 echo "</br>";
 echo "La resta: " . $n1 . " - " . $n2 . " = " . $rest;
 echo "</br>";
 echo "La multiplicacion: " . $n1 . " * " . $n2 . " = " . $mult;
 echo "</br>";
 echo "La division: " . $n1 . " / " . $n2 . " = " . $div;
 echo "</br>";
 echo "El resto de: " .$n1 . " / " . $n2 . " = " . $resto;
?>