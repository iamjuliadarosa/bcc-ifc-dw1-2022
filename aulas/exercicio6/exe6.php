<!DOCTYPE html>
<?php
    $title = "Exercicio 6";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <form action='acao.php' method='get'>
        <label for='raio'>Raio do Circulo: </label>
        <input type='number' name='raio' id='raio'>
        <br>
        <input type='submit'>        
    </form>
</body>
</html>