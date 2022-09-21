<?php
/*Ejercicio 03
Para realizar este ejercicio copiar y renombrar el ejercicio02.
Nuestra zapatería pondrá rebajas. Hay que cambiar los precios de todos los productos. 
La rebaja estará guardada en una variable y será un tanto por ciento. (20%, 50%,...) ejemplo: $rebaja = 20;
Por pantalla se imprimirán los  productos con viejo y el precio nuevo, los nuevos precios se 
guardarán en el array de precios (al finalizar el programa el array de precios quedará con los 
los precios nuevos)
*/

$productos = array('Alilas', 'Redbok', 'Kike', 'Buns', 'Jurdon');
$precio = array('35', '50', '20', '5', '70');
$rebaja = 20;

for ($x=0; $x<count($productos); $x++){
    
    echo $productos[$x] . "  => ";
    echo "Precio viejo: " . $precio[$x] . "  ";
    $precios[$x] = $precio[$x]-(($precio[$x]*$rebaja)/100);
    echo " | Precio nuevo: " . $precios[$x] . "</br>";
}

?>