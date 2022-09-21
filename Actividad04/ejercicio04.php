<?php
/*
Ejercicio 04
Guarda en un array 10 números y saca el número más grande de todos ellos
*/

$num = array('50', '100', '20', '40', '80', '90', '35', '55', '65', '101');
$actual=$num[0];
for($x=0; $x<count($num);$x++){
    if($actual<$num[$x]){
        $actual=$num[$x];
    }
}
echo "El numero mas grande es: " . $actual;