<?php
$mysqli = new mysqli("localhost", "root", "", "test_bd");

$alumnos = $mysqli->query("SELECT * FROM alumno");

while ($row = $alumnos->fetch_assoc()){
    echo ($row['nombre'] . " " . $row['dni'] . " " . $row['email'] . " " . $row['codMatricula'] . " " . $row['ciclo']);
    echo "</br>";
}
$mysqli->close();
?>