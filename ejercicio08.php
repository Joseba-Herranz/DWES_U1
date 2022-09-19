<?php
/*
 * Ejercicio 08
 * Se recibirá un dato llamado pares por GET que contendrá TRUE o FALSE.
 * Si es TRUE, mostrar en pantalla números pares del 1 al número aleatorio menor que 99 
 * si se le ha recibido  el valor FALSE en la pantalla tienen que aparecer los valores impares.
 */

    
    $num=$_GET["num"];
    $rest= $num%2;
    
    if($rest==0){
        $pares=TRUE;
        echo "El numero " . $num ." es par </br>";
        echo "</br>";
    }else{
        $pares=FALSE;
        echo "El numero " . $num ." es impar </br>";
        echo "</br>";
    }


?>