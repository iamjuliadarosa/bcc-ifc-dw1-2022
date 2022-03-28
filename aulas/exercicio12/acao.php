
<?php
$altura = isset($_GET['altura'])?$_GET['altura']:"";
$sexo = isset($_GET['sexo'])?$_GET['sexo']:"";
$peso = "";

if($sexo == "f"){
$peso = (62.1*$altura)-44.7;
}else{
$peso = (72.2*$altura)-58;
}


echo "Sua altura: ";
echo $altura;
echo "<br>Seu sexo: ";
echo $sexo;
echo "<br>Seu peso ideal é: ";
echo $peso;

?>