<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="autor" content=" " /><!-- ESCRIBE TU NOMBRE EN CONTENT -->
	<link rel="stylesheet" href="../css/galerias.css">
	<title>PRUEBA GALERIA</title>
</head>

<body>
	<h1>GALERIA</h1>

	<?php

	 $directory="../img/Galerias/prueba/";
	    $dirint = dir($directory);

	    while (($archivo = $dirint->read()) != false)
	    {
	        if (strpos($archivo,'jpg') || strpos($archivo,'jpeg')){
	            $image = $directory. $archivo;
	            echo'<img style="width: 10vw;" src='.$image. '>';
	        }
	    }
	    $dirint->close();

	?>

</body>
</html>
