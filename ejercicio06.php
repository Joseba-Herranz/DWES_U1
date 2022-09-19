<?php
/*Ejercicio 06
 * Elabore un programa que imprima la figura de un triángulo rectángulo de $numLineas 
 * lineas ajustada a la izquierda, formada por letras “o”. El valor de numero de líneas 
 * se enviará al servidor mediante GET.
 * 
 */

$o = "";
$numLineas= $_GET["num"];
for($x=1; $x<=$numLineas; $x++){
    for($y=$x; $y<=$x; $y++){
        $o .= "o";
    }
    echo $o . "</br>";
}
?>