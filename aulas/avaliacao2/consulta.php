<!DOCTYPE html>
<?php
    include_once "conf/default.inc.php";
    require_once "conf/Conexao.php";
    include_once "venda.class.php";
    $procurar = isset($_POST["procurar"]) ? $_POST["procurar"] : ""; 
?>
<html>
<head>
	<title>Consulta</title>
    <script src="js/script.js"></script>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Procurar vendedores</legend>
        <input type="text"   name="procurar" id="procurar" size="37" value="<?php echo $procurar;?>">
        <input type="submit" name="acao"     id="acao" value="Buscar">
        <br><br>
        <table>
	    <tr><td><b>Nome</b></td><td><b>janeiro</b></td><td><b>fevereiro</b></td><td><b>marco</b></td><td><b>abril</b></td><td><b>maio</b></td><td><b>junho</b></td><td><b>julho</b></td><td><b>agosto</b></td><td><b>setembro</b></td><td><b>outubro</b></td><td><b>novembro</b></td><td><b>dezembro</b></td><td><b>fixo</b></td><td><b>data contratacao</b></td></tr>
        <?php
            $pdo = Conexao::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM vendas 
                                     WHERE nome LIKE '$procurar%' 
                                     ORDER BY nome");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $venda = new Venda($linha['id'],$linha['nome'],$linha['janeiro'],$linha['fevereiro'],$linha['marco'],$linha['abril'],$linha['maio'],$linha['junho'],$linha['julho'],$linha['agosto'],$linha['setembro'],$linha['outubro'],$linha['novembro'],$linha['dezembro'],$linha['fixo'],$linha['dataContratacao']);
        ?>
	    <tr><td><?php echo $venda->getNome();?></td>
            <td><?php echo $venda->getjaneiro();?></td>
            <td><?php echo $venda->getfevereiro();?></td>
            <td><?php echo $venda->getmarco();?></td>
            <td><?php echo $venda->getabril();?></td>
            <td><?php echo $venda->getmaio();?></td>
            <td><?php echo $venda->getjunho();?></td>
            <td><?php echo $venda->getjulho();?></td>
            <td><?php echo $venda->getagosto();?></td>
            <td><?php echo $venda->getsetembro();?></td>
            <td><?php echo $venda->getoutubro();?></td>
            <td><?php echo $venda->getnovembro();?></td>
            <td><?php echo $venda->getdezembro();?></td>
            <td><?php echo $venda->getfixo();?></td>
            <td><?php echo $venda->getdatacontratacao();?></td>
            <td><a href="javascript:excluir('acaoExcluir.php?id=<?=$venda->getID()?>')">Excluir</a></td>
	    </tr>
            <?php } ?>       
        </table>
    </fieldset>
    <fieldset>
        <legend>Ações</legend>
        <a href="manutencaoVendendor.php">Adicionar Vendedor</a>
    </fieldset>
    </form>
</body>
</html>