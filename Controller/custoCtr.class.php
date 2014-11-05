<?php
class custoCtr {
	public function __construct() {
		include_once ("Model/custoVd.class.php");
		custoVd :: validation();

	}
	public function execute() {
		include_once ("Model/custoBo.class.php");

		$obj = new custoBO();

		$retorno = $obj->save();
		$_POST["txVlPago"] = $retorno[0];
		return $retorno[1];
	}
}
?>