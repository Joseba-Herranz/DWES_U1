<?php

$myslqi = new mysqli("localhost", "root", "". "test_db");

$alumno = $mysqli ->query("SELECT * FROM test_db");

while ($row = $alumno->fetch_assoc()){
    echo ($row['nombre'] . " " . $row['dni'] . " " . ['email'] . " " . ['codMatricula'] . " " . ['ciclo']);
    echo "</br>";
}


$myslqi->close();
?>