<!DOCTYPE html>
<html>
<head>
<title>Insert coche</title>
<meta charset="UTF-8">
</head>
<body>

	<form>
		<input name="matricula" placeholder="matricula"> <input name="color"
			placeholder="color"> <input name="marca" placeholder="marca"> <input
			type="submit" value="Guardar">
	</form>
            <?php
            include 'Coche.php';
            
            $coches = Coche::getCochesUnselizados('storecoche');
            
            //imprimir los coches del fichero
            foreach ($coches as $coche) {
                $coche->printHTML();
            }
            
            if (isset($_GET['matricula']) && isset($_GET['color']) && isset($_GET['marca'])) {
            
                $matricula = $_GET['matricula'];
                $color = $_GET['color'];
                $marca = $_GET['marca'];
            
                if ($matricula != NULL && $marca != NULL && $color != NULL) {//se ha rellenado el form
                    //echo "se va ha crear el coche";
            
                    $cocheNuevo = new Coche($matricula, $color, $marca);
                    $cocheNuevo->printHTML();
            
                    $coches[] = $cocheNuevo;
            
                    Coche::guardarSerializado('storecoche', $coches);
         
                }
            }
            ?>
</body>
</html>