<?php
	$valores = array(1,4,7,9,2,5,0,3,8,2,1);
	$dados_json = json_encode($valores);
	$fp = fopen("valores.json","w");
	fwrite($fp, $dados_json);
	fclose($fp);

	$arquivo = file_get_contents('valores.json');
	$json = json_decode($arquivo);
	foreach ($json as $value) {
		echo $value."<br>";
	}

?>