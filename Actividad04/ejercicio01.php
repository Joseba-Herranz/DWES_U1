<?php
/*^
 * Ejercicio 01
 * Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:
 * nombre, apellido y DNI.
 * Hay que meter todos los datos en un array y después visualizarlos por pantalla en formato tabla.
 */
$datos = array("Nombre" => "Iñigo, Juan", "Apellidos" => "Ibarretxe, Garciavaquero", "DNI" => "78945612A, 12345678B" );

print_r($datos);

foreach($datos as $item => $value){
    echo $item . ": " . $value . "<br>";
}

?>

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