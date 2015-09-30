<?php
		$dni = $_GET['dni'];
		$letra = substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
		$spain = "es";
?>

<!DOCTYPE html>
<html lang="<?=$spain?>">
<head>
	<meta charset="UTF-8">
	<title>Letra DNI con PHP</title>
</head>
<body>
	<!-- <h1>El D.N.I. es <?=$dni?>-<?=$letra?></h1> -->
	<h1>DNI = <?php echo $dni; ?> - <?php echo $letra; ?></h1>
</body>
</html>

