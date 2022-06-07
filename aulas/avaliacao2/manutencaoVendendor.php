<!DOCTYPE html>
<?php
$title = "Inserir";
?>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
    <form action="acaoInserir.php" method="post">
    <fieldset>
        <legend><?php echo $title; ?></legend>
        <label for="nome">Nome:</label>
        <br>
        <input type="text"   name="nome" id="nome" size="45">
        <br>
        <label for="janeiro">Janeiro:</label>
        <br>
        <input type="number"   name="janeiro" id="janeiro">
        <br>
        <label for="fevereiro">Fevereiro:</label>
        <br>
        <input type="number"   name="fevereiro" id="fevereiro">
        <br>
        <label for="marco">Marco:</label>
        <br>
        <input type="number"   name="marco" id="marco">
        <br>
        <label for="abril">Abril:</label>
        <br>
        <input type="number"   name="abril" id="abril">
        <br>
        <label for="maio">Maio:</label>
        <br>
        <input type="number"   name="maio" id="maio">
        <br>
        <label for="junho">Junho:</label>
        <br>
        <input type="number"   name="junho" id="junho">
        <br>
        <label for="julho">Julho:</label>
        <br>
        <input type="number"   name="julho" id="julho">
        <br>
        <label for="agosto">Agosto:</label>
        <br>
        <input type="number"   name="agosto" id="agosto">
        <br>
        <label for="setembro">Setembro:</label>
        <br>
        <input type="number"   name="setembro" id="setembro">
        <br>
        <label for="outubro">Outubro:</label>
        <br>
        <input type="number"   name="outubro" id="outubro">
        <br>
        <label for="novembro">Novembro:</label>
        <br>
        <input type="number"   name="novembro" id="novembro">
        <br>
        <label for="dezembro">Dezembro:</label>
        <br>
        <input type="number"   name="dezembro" id="dezembro">
        <br>
        <label for="fixo">Fixo:</label>
        <br>
        <input type="number"   name="fixo" id="fixo">
        <br>
        <label for="contratacao">Data de Contratação:</label>
        <br>
        <input type="date"   name="contratacao" id="contratacao">
        <br><br>
        <input type="submit" name="acao" id="acao" value="salvar">
        <br><br>
    </fieldset>
    </form>
</body>
</html>