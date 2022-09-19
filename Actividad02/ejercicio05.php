<?php
/*
 * Ejercicio 05
 * Hacer una página PHP que compruebe si el contenido de una variable es par o impar.
 * Para ello realiza un formulario que pida un número. 
*/
$var=5;

$par=$var%2;

if($par==0){
    echo "El numero " . $var . " espar";
}else{
    echo "El numero " . $var . " es impar";
}

?>