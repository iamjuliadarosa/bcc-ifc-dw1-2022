<?php

include_once "conf/default.inc.php";
require_once "conf/Conexao.php";

$pdo = Conexao::getInstance();

$stmt = $pdo->prepare('insert into vendas (nome, janeiro, fevereiro, marco, abril, maio, junho, julho, agosto, setembro, outubro, novembro, dezembro, fixo, dataContratacao) values (:nome, :janeiro, :fevereiro, :marco, :abril, :maio, :junho, :julho, :agosto, :setembro, :outubro, :novembro, :dezembro, :fixo, :data)');
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$nome = $_POST['nome'];
$stmt->bindParam(':janeiro', $janeiro, PDO::PARAM_STR);
$janeiro = $_POST['janeiro'];
$stmt->bindParam(':fevereiro', $fevereiro, PDO::PARAM_STR);
$fevereiro = $_POST['fevereiro'];
$stmt->bindParam(':marco', $marco, PDO::PARAM_STR);
$marco = $_POST['marco'];
$stmt->bindParam(':abril', $abril, PDO::PARAM_STR);
$abril = $_POST['abril'];
$stmt->bindParam(':maio', $maio, PDO::PARAM_STR);
$maio = $_POST['maio'];
$stmt->bindParam(':junho', $junho, PDO::PARAM_STR);
$junho = $_POST['junho'];
$stmt->bindParam(':julho', $julho, PDO::PARAM_STR);
$julho = $_POST['julho'];
$stmt->bindParam(':agosto', $agosto, PDO::PARAM_STR);
$agosto = $_POST['agosto'];
$stmt->bindParam(':setembro', $setembro, PDO::PARAM_STR);
$setembro = $_POST['setembro'];
$stmt->bindParam(':outubro', $outubro, PDO::PARAM_STR);
$outubro = $_POST['outubro'];
$stmt->bindParam(':novembro', $novembro, PDO::PARAM_STR);
$novembro = $_POST['novembro'];
$stmt->bindParam(':dezembro', $dezembro, PDO::PARAM_STR);
$dezembro = $_POST['dezembro'];
$stmt->bindParam(':fixo', $fixo, PDO::PARAM_STR);
$fixo = $_POST['fixo'];
$stmt->bindParam(':data', $data, PDO::PARAM_STR);
$data = $_POST['contratacao'];
$stmt->execute();
header("location:consulta.php");

?>