
<?php
	$numero1 = isset($_GET['nota1'])?$_GET['nota1']:"";
    $numero2 = isset($_GET['nota2'])?$_GET['nota2']:"";
    $numero3 = isset($_GET['nota3'])?$_GET['nota3']:"";
    $numero4 = isset($_GET['nota4'])?$_GET['nota4']:"";

            echo ($numero1+$numero2+$numero3+$numero4)/4;

?>