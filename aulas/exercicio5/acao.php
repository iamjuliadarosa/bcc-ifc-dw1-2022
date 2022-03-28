
<?php
$centimetros = isset($_GET['metros'])?$_GET['metros']:"";
$centimetros = $centimetros/1000;
            echo "<h1>Em centimetros: </h1>";
            echo $centimetros;

?>