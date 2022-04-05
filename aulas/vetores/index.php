<!DOCTYPE html>
<html>
<?php
$times = array("SANTOS","PALMEIRAS","FLUMINENSE");
$vet = array(10,20,30,40,50,60,70,80,90,100);
?>
<head>
	<title></title>
</head>
<body>
	<select>
		<?php
		for($i =0; $i<count($times);$i++){
			echo '<option value="'.$times[$i].'">'.$times[$i].'</option>';
		}
		?>
	</select>
	<?php
		foreach ($vet as $value) {
			echo "<h1>".$value."</h1><br>";
		}
	?>
</body>
</html>