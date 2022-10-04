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
        
        echo "Codigo: " . $ordenador->getCodhz();
        echo "</br>";
        echo  "Sistema operativo: " .$ordenador->getOS();
        echo "</br>";
        echo  "Es de sobremesa? " . $ordenador->getEsSobremesa();
    ?>
	
</body>
</html>