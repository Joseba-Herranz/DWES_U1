<?php
/*
 * Ejercicio 09
 * El servidor recibirá un número. El programa tendrá que decirnos si es primo o no.
 */

    $numero=$_GET["num"];
    $valor=$numero-1;
    do{
        $resto=($numero%$valor);
        if($valor==3 && $resto==0){
            echo "El numero: " . $numero . " no es primo";
            break;
        }elseif($valor==2){
            echo "El numero: " . $numero . " es primo";
        }
        $valor--;
    }while($resto!=0);


?>