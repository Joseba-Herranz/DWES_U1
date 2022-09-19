<?php
/*
* Ejercicio 07
* Realiza la suma desde un número (primerNum) hasta otro (ultimoNum). Los valores de los
* dos parámetros se enviarán por GET.
*/
$primerNum=$_GET["prim"];
$ultimoNum=$_GET["ult"];

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