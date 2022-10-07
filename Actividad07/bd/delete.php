<?php
if (isset($_GET['nombre'])){
    $nombre = $_GET[`nombre`];
    
    $mysqli = new mysqli("localhost", "root", "", "test_bd");
    if($mysqli->connect_errno){
        echo "Fallo la conexion a MySQL: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    if(!$sentencia->bind_param("i", $nombre)){
        echo "Fallo la vinculacion de parametros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Fallo la ejecucion: (" . $sentencia->errno . ") " . $sentencia->error;
    }

    $sentencia->close();
    
    $resultado = $mysqli->query("SELECT * FROM test_bd");
    var_dump($resultado-fetch_all());

}else{
    echo("</br>Error en parametros</br>");
}
?>