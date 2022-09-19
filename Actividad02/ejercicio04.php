<?php
/*
 * Ejercicio 04
 * Define tres variables y ordenar en orden ascendente. 
 * Despúes en orden descendente. Guarde como ejercicio04.php
*/

$var1= 10;
$var2= 200;
$var3= 3000;

if ($var1>$var2 && $var1 > $var3){
    if($var2>$var3){
        echo "Descendente: 1: " . $var1 . " 2: " . $var2 . " 3: " . $var3;
    }else{ 
        echo "Descendente: 1: " . $var1 . " 2: " . $var3 . " 3: " . $var2;
    }
}elseif($var2>$var1 && $var2 > $var3){
    if($var1>$var3){
        echo "Descendente: 1: " . $var2 . " 2: " . $var1 . " 3: " . $var3;
    }else{
        echo "Descendente: 1: " . $var2 . " 2: " . $var3 . " 3: " . $var1;
    }
}else{
    if($var1>$var2){
        echo "Descendente: 1: " . $var3 . " 2: " . $var1 . " 3: " . $var2;
    }else{
        echo "Descendente: 1: " . $var3 . " 2: " . $var2 . " 3: " . $var1;
    }
}
echo "</br>";
echo "-----------------";
echo "</br>";
if ($var1<$var2 && $var1 < $var3){
    if($var2<$var3){
        echo "Ascendente: 1: " . $var1 . " 2: " . $var2 . " 3: " . $var3;
    }else{
        echo "Ascendente: 1: " . $var1 . " 2: " . $var3 . " 3: " . $var2;
    }
}elseif($var2<$var1 && $var2 < $var3){
    if($var1<$var3){
        echo "Ascendente: 1: " . $var2 . " 2: " . $var1 . " 3: " . $var3;
    }else{
        echo "Ascendente: 1: " . $var2 . " 2: " . $var3 . " 3: " . $var1;
    }
}else{
    if($var1<$var2){
        echo "Ascendente: 1: " . $var3 . " 2: " . $var1 . " 3: " . $var2;
    }else{
        echo "Ascendente: 1: " . $var3 . " 2: " . $var2 . " 3: " . $var1;
    }
}

?>