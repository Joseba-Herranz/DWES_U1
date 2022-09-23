<?php
/*
Ejercicio 12
Crea un array asociativo y ordenalo dependiendo del key y del valor. Para ello has de 
utilizar las funciones ksort y natsort.
*/

$asociativo = [
    'emilio' => 'Jordi Rubio',
    'marta' => 'Marta Fabra',
    'eva' => 'Eva Palacio',
    'toni' => 'Antonio Comas',
    'emilio' => 'Emilio Morales',
    'fco' => 'Francisco Cascales'
];
echo '<strong>Mostrar el array</strong></br>';
foreach($asociativo as $key => $val){
    echo "$key = $val </br>";
}
echo '</br>';
echo '<strong>Ordenar por clave</strong></br>';
ksort($asociativo);

foreach($asociativo as $key => $val){
    echo "$key = $val </br>";
}
echo '</br>';
echo '<strong>Ordenar por contenido</strong></br>';
natsort($asociativo);

foreach($asociativo as $key => $val){
    echo "$key = $val </br>";
}

?>