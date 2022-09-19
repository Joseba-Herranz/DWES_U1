<?php
/*
 * Ejercicio 04
 * Realiza la suma desde un número (primerNum) hasta otro (ultimoum)
 */

$primerNum=rand(0,100);
$ultimoNum=rand(0,100);

if($primerNum < $ultimoNum){
    $resultado=$primerNum;
    $x=$primerNum;
    for($x=$primerNum; $x<=$ultimoNum; $x++){
        $resultado = ($resultado) + $x;
    }
    echo $resultado . " </br>   ";
}else{
    $resultado=$ultimoNum;
    $x=$ultimoNum;
    for($x; $x<=$primerNum; $x++){
        $resultado = ($resultado) + $x;
    }
    echo  $resultado . "  </br>   ";
}

?>