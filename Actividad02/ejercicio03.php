<?php
/*Ejercicio 03
Define la constante PI y calcula el perímetro y superficie de un círculo cuyo radio es de 5cm. Guarde como ejercicio03.php
*/
$radio=5;

$peri= 2*pi()*$radio;
$super= pi()*$radio*$radio;

echo "El perimetro del circulo es: " . $peri . " y la superficie de este es: " . $super ;
?>