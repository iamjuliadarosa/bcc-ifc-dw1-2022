<!DOCTYPE html>
<?php
    $title = "Web 1";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <form action='acao.php' method='get'>
        <label for='username'>Usuário: </label>
        <input type='text' name='username' id='username'>
        <br>
        <label for='password'>Senha: </label>
        <input type='password' name='password' id='password'>
        <input type='submit'>        
    </form>
</body>
</html>