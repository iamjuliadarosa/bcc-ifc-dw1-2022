<!DOCTYPE html>
<?php
include_once "acaoMarca.php";
include_once "marca.class.php";
$title = "Inserir";
$acao = isset($_GET["acao"]) ? $_GET["acao"] : ""; 
$marca = new Marca(0,"");
if($acao == "editar"){
    $title = "Alterar";
    $marca = busca($_GET["codigo"]);
}

?>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
    <form action="acaoMarca.php" method="get">
    <fieldset>
        <legend><?php echo $title; ?></legend>
        <label for="codigo">Código:</label>
        <br>
        <input type="text"   name="codigo" id="codigo" size="10" value="<?php echo $marca->getCodigo();?>"/>
        <br>
        <label for="descricao">Descrição:</label>
        <br>
        <input type="text"   name="descricao" id="descricao" size="30"value="<?php echo $marca->getDescricao();?>"/>
        <br><br>
        <input type="submit" name="acao" id="acao" value="<?php echo $acao == "editar" ? "alterar" : "salvar"?>">
        <br><br>
    </fieldset>
    </form>
</body>
</html>