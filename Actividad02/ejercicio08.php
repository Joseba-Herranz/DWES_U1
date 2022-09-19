<?php
/*Ejercicio 08
Diseñar un programa que determine la cantidad total a pagar por una llamada 
telefónica de acuerdo a las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta
 5 céntimos.
*/

    $call=rand(1,15);
    echo "La llamada ha sido de  " . $call . " minutos";
    echo "</br>";
    $rest=$call-3;
    $cost=0;
    
    if($call<3){
        echo "Su llamada ha tenido un coste de 10 centimos";
    }else{
        $rest=round($rest/3);
        $cost=10+($rest*5);
        echo "Su llamada ha tenido un coste de " . $cost . " centimos";
    }

?>