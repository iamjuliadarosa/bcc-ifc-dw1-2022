<!DOCTYPE html>
<?php
    $title = "Exercicio 12";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <form action='acao.php' method='get'>
        <label for='altura'>Altura: </label>
        <input type='decimal' name='altura' id='altura'>
        <br>
        <input type='radio' value='f' name='sexo' id='sexo'>Feminino
        <br>
        <input type='radio' value='m' name='sexo' id='sexo'>Masculino
        <br>
        <input type='submit'>        
    </form>
</body>
</html>