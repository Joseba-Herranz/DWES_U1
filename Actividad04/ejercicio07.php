<?php
/*
Ejercicio 07
Hasta ahora para visualizar el contenido de una variable hemos utilizado echo o print. 
En el caso de los arrays se puede utilizar la orden print_r($array) para visualizar el 
contenido del array junto con su índice. Se debe realizar un programa que cree un array con 
10 números aleatorios (números entre 1 y 200) los imprima de las dos formas que aparecen en 
pantalla y después los imprima al revés.  
 */
$array = array();
$max_num = 10;

echo "Relacion de numeros aleatorios </br>";

for($x=0; $x<$max_num; $x++){
    $num_aleatorio = rand(1,200);
    array_push($array, $num_aleatorio);
    echo $array[$x] . " ";
}
echo "</br>";
echo "</br>";
print_r($array);
echo "</br>";
echo "</br>";

echo "Relacion de numeros aleatorios al reves </br>";
for($j=count($array)-1; $j>=0; $j--){
    echo $array[$j] . " "; 
}
?>
