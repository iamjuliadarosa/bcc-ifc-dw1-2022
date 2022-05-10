<?php
try{
$pdo = new PDO('mysql:host=localhost;dbname=teste','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$consulta =$pdo->prepare("SELECT * FROM marca WHERE descricao like :descricao ORDER BY descricao;");

$valor ="M";
$consulta->bindValue(':descricao',$valor."%",PDO::PARAM_STR);
$consulta->execute();

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
	echo "Código: {$linha['codigo']} - Descrição: {$linha['descricao']}<br/>";
}

}catch(PDOException $e){
	echo 'Error: '.$e->getMessage();
}
?>