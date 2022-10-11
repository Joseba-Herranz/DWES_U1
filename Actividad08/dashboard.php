<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: loginform.php");
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">ç
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<h1>Dashboard</h1>
		<h3>Bienvenido <?=$_SESSION['user']?></h3>
		</br></br></br>
		<a href="Logout.php">Desconexion</a>
	</body>
</html>