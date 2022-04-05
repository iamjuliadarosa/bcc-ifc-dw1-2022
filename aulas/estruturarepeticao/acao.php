<?php

	$tab = isset($_GET['tab'])?$_GET['tab']:0;
	$init = isset($_GET['inicio'])?$_GET['inicio']:0;
	$fin = isset($_GET['fim'])?$_GET['fim']:0;
	$order = isset($_GET['order'])?$_GET['order']:"cres";

	echo "<h1>TAB: ".$tab."</h1>";
	echo "<h1>Inicio: ".$init."</h1>";
	echo "<h1>Fim: ".$fin."</h1>";
	echo "<h1>Ordem: ".$order."</h1>";
	
	echo "--------------- Tabuada de ".$tab."-----------------";
	if($order == "cres"){
		for($x = $init; $x <= $fin; $x++){
			$result = $tab * $x;
			echo "<h2>".$tab." x ".$x." = ".$result."</h2>";
		}
	}else{
		for($x = $fin; $x >= $init; $x--){
			$result = $tab * $x;
			echo "<h2>".$tab." x ".$x." = ".$result."</h2>";
		}
	}
	
	echo "--------------------------------";
?>