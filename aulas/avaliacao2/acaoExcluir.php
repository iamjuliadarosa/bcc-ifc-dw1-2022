<?php

include_once "conf/default.inc.php";
require_once "conf/Conexao.php";

$pdo = Conexao::getInstance();

$stmt = $pdo->prepare('delete from vendas where id = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_STR);
$id = $_GET['id'];
$stmt->execute();
header("location:consulta.php");
?>