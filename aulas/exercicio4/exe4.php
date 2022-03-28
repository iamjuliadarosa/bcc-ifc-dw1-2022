<!DOCTYPE html>
<?php
    $title = "Exercicio 4";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <form action='acao.php' method='get'>
        <label for='nota1'>Nota 1: </label>
        <input type='number' name='nota1' id='nota1'>
        <br>
        <label for='nota2'>Nota 2: </label>
        <input type='number' name='nota2' id='nota2'>
        <br>
        <label for='nota3'>Nota 3: </label>
        <input type='number' name='nota3' id='nota3'>
        <br>
        <label for='nota4'>Nota 4: </label>
        <input type='number' name='nota4' id='nota4'>
        <br>
        <input type='submit'>        
    </form>
</body>
</html>