<?php
/*
Ejercicio11 
En este programa tendrás que utilizar un array asociativo para guardar como key cada día de 
la semana y asociar a cada día un valor entero. Se trandrá que mostrar en pantalla cada día y 
valor almacenado en el array así como la suma y media de todos los valores guadados en el array.
*/
$suma=0;
$media=0;

$semana = [
    
        'Lunes' => 1,
        'Martes' => 2,
        'Miercoles' => 3,
        'Jueves' => 4,
        'Viernes' => 5,
        'Sabado' => 6,
        'Domingo' => 7
    
];

print_r($semana);

foreach ($semana as $key => $valor){
    $suma = $suma + $valor;
}

$media = $suma/7;

echo '</br>';
echo 'Suma: ' . $suma;
echo '</br>';
echo 'Media: ' . $media;
?>