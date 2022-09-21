<?php
/*
Ejercicio 05
Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la minima.
*/
$array = array();
$max_num = 10;

for($x=0;$x<$max_num; $x++){
    $num_aleatorio = rand(1,99);
    array_push($array, $num_aleatorio);
}
$actual=$array[0];

for($j=0; $j<count($array);$j++){
    if($actual>$array[$j]){
        $actual=$array[$j];
    }
}
echo "El numero mas pequeño es: " . $actual;
?>