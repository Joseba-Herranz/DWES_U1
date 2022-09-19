<?php
/*
 * Ejercicio 05
 * Elabore un programa que imprima la figura de un triángulo rectángulo de 10 lineas 
 * ajustada a la izquierda, formada por letras “o”. 
 */
$o = "";
$numLineas = 10;

for($x=1; $x<=$numLineas; $x++){
    for($y=$x; $y<=$x; $y++){
        $o .= "o";
    }
   echo $o . "</br>";
}

