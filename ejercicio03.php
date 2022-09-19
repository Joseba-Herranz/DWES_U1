<?php
/*
 * Ejercicio 03
 * Definir una variable llamada “pares” y asignarle un valor booleano.
 * Si es true, mostrar en pantalla números pares del 1 al número aleatorio menor que 
 * 99 si se le ha asignado el valor FALSE a la variable pares en la pantalla tienen que 
 * aparecer los valores impares.
*/

for ($x=0; $x<=100; $x++){

    $num=rand(1,99);
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
}
?>