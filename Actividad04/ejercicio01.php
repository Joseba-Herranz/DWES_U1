<?php
/*^
 * Ejercicio 01
 * Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:
 * nombre, apellido y DNI.
 * Hay que meter todos los datos en un array y después visualizarlos por pantalla en formato tabla.
 */
$nomb1 = 'Iñigo';
$nomb2 = 'Juan';
$apel1 = 'Ibarretxe';
$apel2 = 'Garciavaquero';
$dni1 = '78945612A';
$dni2 = '12345678B';
$datos = [
            [
                'Nombre' => $nomb1,
                'Apellido' => $apel1,
                'DNI' => $dni1,
            ],
            [
                'Nombre' => $nomb2,
                'Apellido' => $apel2,
                'DNI' => $dni2,
            ]
          ];

    $s = '<table border="1">';
    foreach ( $datos as $r ){
        $s .= '<tr>';
        foreach ($r as $v){
            $s .= '<td>' . $v . '</td>';
        }
        $s .= '</tr>';
    }
    $s .= '</table>';
    
    echo $s;
?>

