<!DOCTYPE html>
<?php
	include_once "conf/default.inc.php";
    require_once "conf/Conexao.php";
    include_once "venda.class.php";
    $procurar = isset($_POST["procurar"]) ? $_POST["procurar"] : ""; 
?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
        $pdo = Conexao::getInstance(); 
        $consulta = $pdo->query("SELECT * FROM vendas 
                                 WHERE nome LIKE '$procurar%' 
                                 ORDER BY nome");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
            $venda = new Venda($linha['id'],$linha['nome'],$linha['janeiro'],$linha['fevereiro'],$linha['marco'],$linha['abril'],$linha['maio'],$linha['junho'],$linha['julho'],$linha['agosto'],$linha['setembro'],$linha['outubro'],$linha['novembro'],$linha['dezembro'],$linha['fixo'],$linha['dataContratacao']);
            echo $venda;
        }
    ?>
</body>
</html>