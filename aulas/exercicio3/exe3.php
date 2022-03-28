<!DOCTYPE html>
<?php
    $title = "Exercicio 3";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <form action='acao.php' method='get'>
        <label for='numero1'>Numero 1: </label>
        <input type='number' name='numero1' id='numero1'>
        <br>
        <label for='numero2'>Numero 2: </label>
        <input type='number' name='numero2' id='numero2'>
        <input type='submit'>        
    </form>
</body>
</html>