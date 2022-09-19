<?php
/*
 * Ejercicio 06
 * Hacer una página PHP que tenga dos variables y nos indique si la 
 * suma de los números es mayor que el producto (resultado de la multiplicación) 
 * de ellos o al contrario: Ejemplo:
 * Numero1=1; numero2=2 —> “ la suma es mayor que el producto”
 * Numero1=1; numero2=2 —>“ el producto es mayor que la suma”
 */

$n1=10;
$n2=20;

$suma=$n1+$n2;
$multi=$n1*$n2;

if($suma>$multi){
    echo "La suma ( " . $suma ." ) es mayor que la multiplicacion ( " . $multi . " )";
}else{
    echo "La suma ( " . $suma ." ) es menor que la multiplicacion ( " . $multi . " )";
}

?>