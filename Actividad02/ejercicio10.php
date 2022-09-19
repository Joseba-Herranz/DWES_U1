<?php
/*Ejercicio 10
 * Tengo un billete de avión para Denver definir la variable dataSalida. 
 * Necesito que el programa calcule cuanto tiempo me faltan para coger 
 * dicho avión, dependiendo de la hora actual.
*/

$dataSalida=date_create("13-10-2035 13:35:20" );
$horaActual = new DateTime("now");
$diferencia=date_diff($dataSalida, $horaActual);

echo "Hora de salida: " . $dataSalida->format('Y-m-d H:i:s');
echo "</br>";
echo "</br>";
echo "Hora actual: " . $horaActual->format('Y-m-d H:i:s');
echo "</br>";
echo "</br>";
echo "Quedan " . $diferencia->format("%a dias, %H horas, %m minutos, %s segundos");
?>