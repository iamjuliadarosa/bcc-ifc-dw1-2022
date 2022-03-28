<!DOCTYPE html>
<?php
    $title = "Exercicio 5";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <form action='acao.php' method='get'>
        <label for='metros'>Metros: </label>
        <input type='number' name='metros' id='metros'>
        <br>
        <input type='submit'>        
    </form>
</body>
</html>