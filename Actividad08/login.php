<?php
$user = $_GET['user'];
$pass = $_GET['pass'];

if($user=="root" && $pass=="root"){
    echo "Usuario y contraseña son correctos";
    session_start();
    $_SESSION['user'] = $user;
    header("Location: dashboard.php");
}else{
    header("Location: loginform.php");
}
?>