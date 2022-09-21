<?php
/*
Ejercicio 02
En una zapatería sólo se venden 5 productos. Tengo los productos y los precios 
guardados en 2 arrays (en uno los productos y en otro los precios). Hay que visualizar 
cada producto con su precio.
*/

$productos = array('Alilas', 'Redbok', 'Kike', 'Buns', 'Jurdon');
$precios = array('35', '50', '20', '5', '70');

for ($x=0; $x<count($productos); $x++){
    echo $productos[$x] . "  => ";
    echo $precios[$x] . "</br>";
}
?>