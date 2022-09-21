<?php
/*
 Ejercicio 06
 Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la media.

 */
$array = array();
$max_num = 10;
$media=0;

for($x=0;$x<$max_num; $x++){
    $num_aleatorio = rand(1,99);
    array_push($array, $num_aleatorio);
}

for($j=0; $j<count($array);$j++){
    $media=$media+$array[$j];
}

$resultado = $media/10;

echo "La media de los 10 numeros es: " . $resultado;
?>