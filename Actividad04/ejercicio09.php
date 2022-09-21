<?php
/*
Ejercicio 09
Crear un array asociativo con los nombres de meses como índice y los números de los días valor.
*/

$meses = [
    [
        'Mes' => 'Enero',
        'Numero' => '1',
    ],
    [
        'Mes' => 'Febrero',
        'Numero' => '2',
    ],
    [
        'Mes' => 'Marzo',
        'Numero' => '3',
    ],
    [
        'Mes' => 'Abril',
        'Numero' => '4',
    ],
    [
        'Mes' => 'Mayo',
        'Numero' => '5',
    ],
    [
        'Mes' => 'Junio',
        'Numero' => '6',
    ],
    [
        'Mes' => 'Julio',
        'Numero' => '7',
    ],
    [
        'Mes' => 'Agosto',
        'Numero' => '8',
    ],
    [
        'Mes' => 'Septiembre',
        'Numero' => '9',
    ],
    [
        'Mes' => 'Octubre',
        'Numero' => '10',
    ],[
        'Mes' => 'Noviembre',
        'Numero' => '11',
    ],
    [
        'Mes' => 'Diciembre',
        'Numero' => '12',
    ]
];

$s = '<table border="0">';
foreach ( $meses as $r ){
    $s .= '<tr>';
    foreach ($r as $v){
        $s .= '<td>' . $v . '</td>';
    }
    $s .= '</tr>';
}
$s .= '</table>';

echo $s;

?>