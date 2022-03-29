<!DOCTYPE html>
<html>
<head>
	<?php
	$raio = isset($_GET['raio'])?$_GET['raio']:"";
	$altura = isset($_GET['altura'])?$_GET['altura']:"";
	$nivel = isset($_GET['nivel'])?$_GET['nivel']:"";

	$areaCirculo;
	$circunferencia;
	$superficeCilindro;
	$areaTotalCilindro;

	$litros;
	$latas;
	$gasto;

	?>
	<title>Avaliação Desenvolvimento Web I</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<form>
	<label for="raio">Raio</label>
	<input type="raio" name="raio" id="raio" value="<?php if(!is_null($raio)) echo $raio; ?>">
	<br>
	<label for="altura">Altura</label>
	<input type="altura" name="altura" id="altura" value="<?php if(!is_null($altura)) echo $altura; ?>">
	<br>
	Nivel de Segurança 
	<input type="radio" name="nivel" id="nivel" value="baixo" <?php if($nivel == "baixo") echo "checked"; ?>> Baixo
	<input type="radio" name="nivel" id="nivel"  value="medio"<?php if($nivel == "medio") echo "checked"; ?>> Médio
	<input type="radio" name="nivel" id="nivel" value="alto" <?php if($nivel == "alto") echo "checked"; ?>> Alto
	<br>
	<input type="submit" name="submit">
	<?php 
		if(isset($_GET['raio']) && isset($_GET['altura'])){
			$areaCirculo = 3.14*($raio * $raio);
			$circunferencia = 2*(3.14*$raio);
			$superficeCilindro = $circunferencia * $altura;
			$areaTotalCilindro = (3*$areaCirculo) + ($superficeCilindro*2);

			$litros = $areaTotalCilindro * 4;
			$latas = ceil($litros/100);
			if($nivel=="baixo"){
				$gasto = $latas *342.49;
			}else if($nivel =="medio"){
				$gasto = $latas *479.27;
			}else if($nivel == "alto"){
				$gasto = $latas *623.54;
			}
			echo "<br><br><img src=\"img/imagem$nivel.png\">";
			echo "<h1 class=\"$nivel\">Raio: $raio metros e Altura $altura metros</h1>";
			echo "<h1 class=\"$nivel\">Área Total: $areaTotalCilindro </h1>";
			echo "<h1 class=\"$nivel\">Serão gastos: $litros litros </h1>";
			echo "<h1 class=\"$nivel\">Você vai utilizar: $latas latas</h1>";
			echo "<h1 class=\"$nivel\">Você vai gastar:R$ $gasto</h1>";
		}
	 ?>
</form>
</body>
</html>