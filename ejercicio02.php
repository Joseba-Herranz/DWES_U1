<?php
/*
 * Ejercicio 02
 * Mostrar en pantalla números pares del 100 al 1
*/

for ($x = 100; $x>=0; $x--){
    $valor = $x%2;
    if ($valor=0){
        echo $x;
    }
}

?>