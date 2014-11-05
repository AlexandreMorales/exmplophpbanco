<?php
class custoBo {

	private $dao;

	public function __construct() {
		include_once ("custoDao.class.php");
		$this->dao = new custoDao();
	}
	public function __destruct() {
		unset ($this->dao);
	}
	public function save() {
		$idVeiculo = custoVd :: getIdVeiculo();
		$idComp1 = custoVd :: getIdComp1();
		$idComp2 = custoVd :: getIdComp2();
		$idComp3 = custoVd :: getIdComp3();
		$idComp4 = custoVd :: getIdComp4();
		$vl1 = custoVd :: getValor1();
		$vl2 = custoVd :: getValor2();
		$vl3 = custoVd :: getValor3();
		$vl4 = custoVd :: getValor4();
		$desconto = custoVd :: getDesconto();

		$retorno = "";

		$ret = $this->dao->insert("idVeiculo,idComponente1,idComponente2,idComponente3,idComponente4,valor1,valor2,valor3,valor4,desconto", "$idVeiculo,$idComp1,$idComp2,$idComp3,$idComp4,$vl1,$vl2,$vl3,$vl4,$desconto");

		if ($ret == 1)
			$retorno = "Gravaзгo com sucesso!";
		else
			$retorno = "Nгo foi possнvel gravar";

		return $retorno;
	}
}
?>