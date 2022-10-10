<h1>Borra datos de la base de datos</h1>
<form action="delete.php" method="get">
    <p>
    	<label for="dni">DNI: </label>
    	<input type="text" name="dni" id="dni">
    </p>
    
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['dni'])){
    $dni = $_GET[`dni`];
    
    $mysqli = new mysqli("localhost", "root", "", "test_bd");
    if($mysqli->connect_errno){
        echo "Fallo la conexion a MySQL: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    if(!($sentencia = $mysqli-prepare("DELETE FROM alumno WHERE dni=?"))){
        echo "Fallo la preparacion: (". $mysqli-errno .") ". $mysqli->error;
    }
    
    if(!$sentencia->bind_param("s", $dni)){
        echo "Fallo la vinculacion de parametros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Fallo la ejecucion: (" . $sentencia->errno . ") " . $sentencia->error;
    }

    $sentencia->close();
    
    $resultado = $mysqli->query("SELECT * FROM alumno");
    var_dump($resultado-fetch_all());

}else{
    echo("</br>Error en parametros</br>");
}
?>