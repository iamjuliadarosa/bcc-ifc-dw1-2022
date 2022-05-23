<?php
	include_once "conf/default.inc.php";
	require_once "conf/Conexao.php";
	include_once "marca.class.php";

	$codigo = isset($_POST["codigo"]) ? $_POST["codigo"] : ""; 
	$descricao = isset($_POST["descricao"]) ? $_POST["descricao"] : ""; 

	$pdo = Conexao::getInstance(); 

	if($codigo == null or $codigo == "0"){
		/*$stmt = $pdo->prepare("INSERT INTO marca (descricao) values (@descricao)");
		$stmt->bindParam('@descricao', $descricao, PDO::PARAM_STR);
		$descricao = $_POST["descricao"];
		$stmt->execute();*/
		$pdo->query("INSERT INTO marca (descricao) values ('$descricao')");
        header('location:index.php');
	}else{
		$pdo->query("UPDATE marca set descricao ='$descricao' where codigo = '$codigo';");
        header('location:index.php');
	}
?>