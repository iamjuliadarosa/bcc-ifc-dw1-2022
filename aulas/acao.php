
<?php
$username = isset($_GET['username'])?$_GET['username']:"";
    $password = isset($_GET['password'])?$_GET['password']:"";
    if($username != null and $password != null){
        if($username == $password){
            echo "<h1>NÃO LOGADO</h1>";
        }else{
            echo "<h1>LOGADO</h1>";
        }
    }else{
       echo "<h1>NÃO LOGADO</h1>";
    }
?>