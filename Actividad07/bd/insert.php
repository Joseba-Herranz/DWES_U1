<h1>Instertar datos en la base de datos</h1>
<form action="insert.php" method="get">
    <p>
    	<label for="nombre">Nombre: </label>
    	<input type="text" name="nombre" id="nombre">
    </p>
             
    <p>
    	<label for="dni">DNI: </label>	
    	<input type="text" name="dni" id="dni">
    </p>
      
    <p>
    	<label for="email">email: </label>
    	<input type="text" name="email" id="email">
    </p>
            
    <p>
    	<label for="codMatricula">Matricula: </label>
    	<input type="text" name="codMatricula" id="codMatricula">
    </p>
    
    <p>
    	<label for="ciclo">Ciclo: </label>
    	<input type="text" name="ciclo" id="ciclo">
    </p>
    <input type="submit" value="Submit">
</form>

<?php

if(isset($_GET['nombre']) && isset($_GET['dni']) && isset($_GET['email']) && isset($_GET['codMatricula']) && isset($_GET['ciclo'])){
    $nombre = $_GET['nombre'];
    $dni = $_GET['dni'];
    $email = $_GET['email'];
    $codMatricula = $_GET['codMatricula'];
    $ciclo = $_GET['ciclo'];

    $mysqli = new mysqli("localhost", "root", "", "test_bd");
    
    if($mysqli->connect_errno){
        echo "Fallo la conexion a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    if (!($sentencia = $mysqli->prepare("INSERT INTO alumno(nombre, dni, email, codMatricula, ciclo) VALUES (?, ?, ?, ?, ?)"))){
        echo "Fallo la preparacion: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    if (!$sentencia->bind_param("sssss", $nombre, $dni, $email, $codMatricula, $ciclo)) {
        echo "Fallo la vinculacion de parametros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if(!$sentencia->execute()){
        echo "Fallo la ejecucion: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    $sentencia->close();
    
    $resultado = $mysqli->query("SELECT * FROM alumno");
    var_dump($resultado->fetch_all());
}else{
    echo("</br>Error en parametros</br>");
    
}
?>