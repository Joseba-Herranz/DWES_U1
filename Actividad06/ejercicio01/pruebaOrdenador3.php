<!DOCTYPE html>
<html>
<head>
<title>Insert coche</title>
<meta charset="UTF-8">
</head>
<body>


<?php
include 'Ordenador.php';

$ordenador = new ordenador();
$ordenador->setCodhz('HZ01234');
$ordenador->setOS('Linux');
$ordenador->setEsSobremesa(True);

?>
<table border=1px>
	<tr>
		<td>Codigo</td>
		<td><?php echo $ordenador->getCodhz()?></td>
	</tr>
	<tr>
		<td>Sistema Operativo</td>
		<td><?php echo $ordenador->getOS()?></td>
	</tr>
	<tr>
		<td>Sobremesa</td>
		<td><?php echo $ordenador->getEsSobremesa()?></td>
	</tr>
</table>
</body>
</html>