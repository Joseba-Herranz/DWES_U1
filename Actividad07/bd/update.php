<?php
if(isset($_GET['nombre']) && isset($_GET['dni']) && isset($_GET['email']) && isset($_GET['codMatricula']) && isset($_GET['ciclo'])){
    $nombre= $_GET['nombre'];
    $dni = $_GET['dni'];
    $email = $_GET['email'];
    $codMatricula = $_GET['codMatricula'];
    $ciclo = $_GET['ciclo'];
    
    $mysqli = new mysqli("localhost", "root", "", "test_bd");
    if($mysqli->connect_errno){
        echo "Fallo la conexion a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    if(!$sentencia->execute()){
        echo "Fallo la ejecucion: (" . $sentencia-errno . ") " . $sentencia->error;
    }
    
    $sentencia->close();
}else{
    echo("<br>Error en parametros<br>");
}
?>