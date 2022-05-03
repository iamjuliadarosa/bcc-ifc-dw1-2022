<!DOCTYPE html>
<html>
<?php
 $data = isset($_POST['data'])?str_replace("/", "-", $_POST['data']):"24-04-1978";
?>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="data.php">
	<label>Data</label>
	<input type="text" name="data" id="data" value="<?php echo date("d/m/Y", strtotime('+5 days',strtotime($data)));?>" placeholder="Informe a data (dd/mm/aaaa)" required="true">
	<br>
	<label>Dias</label>
	<input type="text" name="dias" id="dias">
	<br>
	<label>Meses</label>
	<input type="text" name="meses">
	<br>
	<label>Anos</label>
	<input type="text" name="Anos">
	<br>
	<label>Soma</label>
	<input type="radio" name="tipo" id="tipo" value="soma">
	<input type="submit" name="enviar">
	<?php
	echo date('z',strtotime($data));
	?>
</form>
</body>
</html>