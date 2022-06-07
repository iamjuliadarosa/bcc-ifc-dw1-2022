<?php
	include_once "conf/default.inc.php";
	require_once "conf/Conexao.php";
	include_once "marca.class.php";
	$acao = isset($_GET["acao"]) ? $_GET["acao"] : "";
	if($acao == "alterar"){
		$codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : "";
		$descricao = isset($_GET["descricao"]) ? $_GET["descricao"] : "";
		$marca = busca($codigo);
		if($marca != null){
			$marca->setDescricao($descricao);
			update($marca);
		}else{
			$marca = new Marca("0",$descricao);
			insert($marca);
		}		
	}else if($acao == "salvar"){
		$descricao = isset($_GET["descricao"]) ? $_GET["descricao"] : "";
		$marca = new Marca("0",$descricao);
		insert($marca);
	}else if($acao == "excluir"){
		$codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : "";
		deletar($codigo);
	}

	function insert(Marca $marca){
		$pdo = Conexao::getInstance();
		$stmt = $pdo->prepare('INSERT INTO marca (descricao) VALUES(:descricao)');
		$stmt->bindParam(':descricao', $marca->getDescricao(), PDO::PARAM_STR);
		$stmt->execute();
		header("location:index.php");
	}
	function update(Marca $marca){
		$pdo = Conexao::getInstance();
		$pdo->query("UPDATE marca set descricao ='".$marca->getDescricao()."' where codigo = '".$marca->getCodigo()."';");
        header('location:index.php');
	}
	function busca($codigo){
		$pdo = Conexao::getInstance(); 
        $consulta = $pdo->query("SELECT * FROM marca WHERE codigo = '$codigo'");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
            $marca = new Marca($linha['codigo'],$linha['descricao']);
            return $marca;
        }
	}
	function deletar($codigo){
		$pdo = Conexao::getInstance(); 
		$pdo->query("DELETE FROM marca where codigo = '".$marca->getCodigo()."';");
        header('location:index.php');
	}
	function editar(){
		echo "Alterar";
	}
?>