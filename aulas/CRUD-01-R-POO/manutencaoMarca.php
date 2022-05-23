<!DOCTYPE html>
<?php
$title = "Inserir";
$codigo = isset($_POST["codigo"]) ? $_POST["codigo"] : ""; 
?>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
    <form action="acaoMarca.php" method="post">
    <fieldset>
        <legend><?php echo $title; ?></legend>
        <label for="codigo">Código:</label>
        <br>
        <input type="text"   name="codigo" id="codigo" size="10" /*value="<?php echo $codigo;?>"*/>
        <br>
        <label for="descricao">Descrição:</label>
        <br>
        <input type="text"   name="descricao" id="descricao" size="30" /*value="<?php echo $descricao;?>"*?>
        <br><br>
        <input type="submit" name="acao"     id="acao">
        <br><br>
    </fieldset>
    </form>
</body>
</html>