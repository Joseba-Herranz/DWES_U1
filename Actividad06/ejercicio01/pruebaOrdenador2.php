<!DOCTYPE html>
<html>
<head>
<title>Insert coche</title>
<meta charset="UTF-8">
</head>
<body>


<?php
include 'Ordenador.php';
$ordenadores = array();

array_push($ordenadores, new ordenador("HZ01234", "Linux", TRUE));
array_push($ordenadores, new ordenador("HZ78545", "Windows", TRUE));
array_push($ordenadores, new ordenador("HZ58745", "Chromium OS", FALSE));
array_push($ordenadores, new ordenador("HZ63241", "IOS", FALSE));
?><!-- -->

<table border=1px black;>

<?php 
foreach ($ordenadores as $ordenador){
    
    echo "<tr>";
    echo "<td>" . $ordenador->CodHZ . "</td>" ;
    echo "<tr>";
    echo "<td>" . $ordenador->OS . "</td>" ;
    echo "<tr>";
    echo "<td>" . $ordenador->EsSobremesa . "</td>" ;
    echo "</tr>";
}

?>
</table>
</body>
</html>