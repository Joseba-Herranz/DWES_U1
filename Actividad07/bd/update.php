<h1>Actualizar datos en la base de datos</h1>
<form action="update.php" method="get">
    <p>
    	<label for="nombre">Nombre: </label>
    	<input type="text" name="nombre" id="nombre">
    </p>
           
    <p>
    	<label for="dni">DNI: </label>	
    	<input type="text" name="dni" id="dni">
    </p>
     
    <p>
    	<label for="email">Email: </label>
    	<input type="text" name="email" id="email">
    </p>
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_GET['nombre']) && isset($_GET['dni']) && isset($_GET['email'])){
    $nombre= $_GET['nombre'];
    $dni = $_GET['dni'];
    $email = $_GET['email'];
    
    $mysqli = new mysqli("localhost", "root", "", "test_bd");
    if($mysqli->connect_errno){
        echo "Fallo la conexion a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    if(!($sentencia = $mysqli->prepare("UPDATE alumno SET nombre=?, email=? WHERE dni=?"))){
        echo "Fallo la preparacion: (". $mysqli->errno . ") ". $mysqli->error;
    }
    
    if(!$sentencia->bind_param("sss", $nombre, $dni, $email )){
        echo "Fallo la vinculacion de parametros: (". $mysqli->errno . ") ". $mysqli->error;
    }
    
    if(!$sentencia->execute()){
        echo "Fallo la ejecucion: (" . $sentencia-errno . ") " . $sentencia->error;
    }
    
    $sentencia->close();
}else{
    echo("<br>Error en parametros<br>");
}
?>