<?php

class custoVd {

  private static $idVeiculo;
  private static $idComp1;
  private static $vl1;
  private static $idComp2;
  private static $vl2;
  private static $idComp3;
  private static $vl3;
  private static $idComp4;
  private static $vl4;
  private static $desconto;
  
  public static function validation()
  {
  	if (trim($_POST["slVeiculo"])=="")
  	  throw new Exception("Informe o ve�culo!");
  	if (!is_numeric($_POST["txtValorOrc"]) || $_POST["txtValorOrc"] == "0")
  	  throw new Exception("Valor de or�amento inv�lido!");
  	if (trim($_POST["slPeca1"])=="")
  	  throw new Exception("Informe a Pe�a1!");
  	if (!is_numeric($_POST["txtValor1"]) || $_POST["txtValor1"] == "0")
  	  throw new Exception("Valor do valor1 inv�lido!");
  	if (trim($_POST["slPeca2"])=="")
  	  throw new Exception("Informe a Pe�a2!");
  	if (!is_numeric($_POST["txtValor2"]) || $_POST["txtValor2"] == "0")
  	  throw new Exception("Valor do valor2 inv�lido!");
  	if (trim($_POST["slPeca3"])=="")
  	  throw new Exception("Informe a Pe�a3!");
  	if (!is_numeric($_POST["txtValor3"]) || $_POST["txtValor3"] == "0")
  	  throw new Exception("Valor do valor3 inv�lido!");
  	if (trim($_POST["slPeca4"])=="")
  	  throw new Exception("Informe a Pe�a4!");
  	if (!is_numeric($_POST["txtValor4"]) || $_POST["txtValor4"] == "0")
  	  throw new Exception("Valor do valor4 inv�lido!");
  	
  	if(($_POST["slPeca1"])==($_POST["slPeca2"]) ||
  		($_POST["slPeca1"])==($_POST["slPeca3"]) ||
  		($_POST["slPeca1"])==($_POST["slPeca4"]) ||
  		($_POST["slPeca2"])==($_POST["slPeca3"]) ||
  		($_POST["slPeca2"])==($_POST["slPeca4"]) ||
  		($_POST["slPeca3"])==($_POST["slPeca4"]))
  	  throw new Exception("As pe�as n�o podem se repetir!");
  	  
  	$v1= (int) $_POST["txtValor1"];
  	$v2= (int) $_POST["txtValor2"];
  	$v3= (int) $_POST["txtValor3"];
  	$v4= (int) $_POST["txtValor4"];
  	$total = $v1+$v2+$v3+$v4;
  	
  	if($total>(double) $_POST["txtValorOrc"])
  	  throw new Exception("O valor total n�o pode ser maior que o or�amento!");
  	
  	if($total/2==(double) $_POST["txtValorOrc"])
  	  self::$desconto=10;
  	 
  	self::$desconto=0; 
  	self::$idVeiculo=$_POST["slVeiculo"];
  	self::$idComp1=$_POST["slPeca1"];
  	self::$idComp2=$_POST["slPeca2"];
  	self::$idComp3=$_POST["slPeca3"];
  	self::$idComp4=$_POST["slPeca4"];
  	self::$vl1=$_POST["txtValor1"];
  	self::$vl2=$_POST["txtValor2"];
  	self::$vl3=$_POST["txtValor3"];
  	self::$vl4=$_POST["txtValor4"];
  }
  public function getIdVeiculo(){return self :: $idVeiculo;}
  public function getIdComp1(){return self :: $idComp1;}
  public function getIdComp2(){return self :: $idComp2;}
  public function getIdComp3(){return self :: $idComp3;}
  public function getIdComp4(){return self :: $idComp4;}
  public function getValor1(){return self :: $vl1;}
  public function getValor2(){return self :: $vl2;}
  public function getValor3(){return self :: $vl3;}
  public function getValor4(){return self :: $vl4;}
  public function getDesconto(){return self :: $desconto;}

}
?>