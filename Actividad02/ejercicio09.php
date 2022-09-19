<?php
/*
 * Ejercicio 09
 * Definir dos notas en dos variables y calcular si la media es aprobada o suspendida.
*/

$n1=rand(0,10);
$n2=rand(0,10);

$notamedia=($n1+$n2)/2;

echo "Sus notas son " . $n1 . " y  " . $n2;
echo "</br>";

echo "</br>";

if ($notamedia<5){
    echo "Su media es de " . $notamedia . ", no llegas al minimo y por ello tienes suspendido";
}else{
    echo "Su media es de " . $notamedia . ", llegas el minimo. Enhorabuena, has aprobado!";
}
?>