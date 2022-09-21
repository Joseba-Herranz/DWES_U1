<?php
/*
Ejercicio 08
Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:
nombre, apellido y DNI.
Hay que meter todos los datos en un array asociativo donde los índices sean “nombre”, 
“apellido”, “DNI” y después visualizarlos por pantalla en formato tabla.
 */
$datos = [
    [
        'Nombre' => 'Iñigo',
        'Apellido' => 'Ibarretxe',
        'DNI' => '78945612A',
    ],
    [
        'Nombre' => 'Juan',
        'Apellido' => 'Garciavaquero',
        'DNI' => '12345678B',
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