
<?php
$raio = isset($_GET['raio'])?$_GET['raio']:"";
$raio = $raio*$raio*3.14;
            echo "<h1>Area do Circulo: </h1>";
            echo $raio;

?>