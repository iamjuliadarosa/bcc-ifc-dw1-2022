<!DOCTYPE html>
<html>
<head>
	<?php
	$valor = isset($_GET['numero'])?$_GET['numero']:"";
	if(isset($_GET['numero'])){
		echo "<h1 class=\"numero$valor\">$valor</h1>";	
		echo "<img src=\"images/imagem$valor.png\">";
	}
	?>
	<title>Exercicio de Revisão</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<form method="GET">
	<input type="number" name="numero">
	<input type="submit" name="submit">
</form>
</body>
</html>