<?php
class Venda {
	private $id;
	private $nome;
	private $janeiro;
	private $fevereiro;
	private $marco;
	private $abril;
	private $maio;
	private $junho;
	private $julho;
	private $agosto;
	private $setembro;
	private $outubro;
	private $novembro;
	private $dezembro;
	private $fixo;
	private $dataContratacao;

	public function __construct($id,$nome,$janeiro,$fevereiro,$marco,$abril,$maio,$junho,$julho,$agosto, $setembro, $outubro,$novembro, $dezembro, $fixo, $dataContratacao) {
		$this->setID($id);
		$this->setNome($nome);
		$this->setJaneiro($janeiro);
		$this->setFevereiro($fevereiro);
		$this->setMarco($marco);
		$this->setAbril($abril);
		$this->setMaio($maio);
		$this->setJunho($junho);
		$this->setJulho($julho);
		$this->setAgosto($agosto);
		$this->setSetembro($setembro);
		$this->setOutubro($outubro);
		$this->setNovembro($novembro);
		$this->setDezembro($dezembro);
		$this->setFixo($fixo);
		$this->setDataContratacao($dataContratacao);
	}
	public function setID($nome){
		if($nome > 0){
			$this->id = $nome;
		}else{
			$this->id = 0;
		}
	}
	public function setNome($nome){
		if($nome > 0){
			$this->nome = $nome;
		}
	}
	public function setJaneiro($nota) {
		if ($nota >= 0) {
			$this->janeiro = $nota;
		}else{
			$this->janeiro = 0;
		}
	}
	public function setFevereiro($nota) {
		if ($nota >= 0) {
			$this->fevereiro = $nota;
		}else{
			$this->fevereiro = 0;
		}
	}
	public function setMarco($nota) {
		if ($nota >= 0) {
			$this->marco = $nota;
		}else{
			$this->marco = 0;
		}
	}
	public function setAbril($nota) {
		if ($nota >= 0) {
			$this->abril = $nota;
		}else{
			$this->abril = 0;
		}
	}
	public function setMaio($nota) {
		if ($nota >= 0) {
			$this->maio = $nota;
		}else{
			$this->maio = 0;
		}
	}
	public function setJunho($nota) {
		if ($nota >= 0) {
			$this->junho = $nota;
		}else{
			$this->junho = 0;
		}
	}
	public function setJulho($nota) {
		if ($nota >= 0) {
			$this->julho = $nota;
		}else{
			$this->julho = 0;
		}
	}
	public function setAgosto($nota) {
		if ($nota >= 0) {
			$this->agosto = $nota;
		}else{
			$this->agosto = 0;
		}
	}
	public function setSetembro($nota) {
		if ($nota >= 0) {
			$this->setembro = $nota;
		}else{
			$this->setembro = 0;
		}
	}
	public function setOutubro($nota) {
		if ($nota >= 0) {
			$this->outubro = $nota;
		}else{
			$this->outubro = 0;
		}
	}
	public function setNovembro($nota) {
		if ($nota >= 0) {
			$this->novembro = $nota;
		}else{
			$this->novembro = 0;
		}
	}
	public function setDezembro($nota) {
		if ($nota >= 0) {
			$this->dezembro = $nota;
		}else{
			$this->dezembro = 0;
		}
	}
	public function setFixo($nota) {
		if ($nota >= 0) {
			$this->fixo = $nota;
		}else{
			$this->fixo = 0;
		}
	}
	public function setDataContratacao($nota) {
		if ($nota >= 0) {
			$this->dataContratacao = $nota;
		}else{
			$this->dataContratacao = 0;
		}
	}
	public function __toString() {
		return "[Vendedor] Nome: ".$this->nome." | ".
		"Janeiro: ".$this->janeiro." | ".
		"Fevereiro: ".$this->fevereiro." | ".
		"Marco: ".$this->marco." | ".
		"Abril: ".$this->abril." | ".
		"Maio: ".$this->maio." | ".
		"Junho: ".$this->junho." | ".
		"Julho: ".$this->julho." | ".
		"Agosto: ".$this->agosto." | ".
		"Setembro: ".$this->setembro." | ".
		"Outubro: ".$this->outubro." | ".
		"Novembro: ".$this->novembro." | ".
		"Dezembro: ".$this->dezembro."</br>";
	}
	public function getID() {
		return $this->id;
	}
	public function getNome() {
		return $this->nome;
	}
	public function getjaneiro() {
		return $this->janeiro;
	}
	public function getfevereiro() {
		return $this->fevereiro;
	}
	public function getmarco() {
		return $this->marco;
	}
	public function getabril() {
		return $this->abril;
	}
	public function getmaio() {
		return $this->maio;
	}
	public function getjunho() {
		return $this->junho;
	}
	public function getjulho() {
		return $this->julho;
	}
	public function getagosto() {
		return $this->agosto;
	}
	public function getsetembro() {
		return $this->setembro;
	}
	public function getoutubro() {
		return $this->outubro;
	}
	public function getnovembro() {
		return $this->novembro;
	}
	public function getdezembro() {
		return $this->dezembro;
	}
	public function getfixo() {
		return $this->fixo;
	}
	public function getdatacontratacao() {
		return $this->dataContratacao;
	}
}
?>