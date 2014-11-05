<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Cadastro de Veículos</title>
	<style>
			form{
				margin: 0 auto;			
				width:700px;				
				padding-top: 10px;
				padding-bottom: 10px;
			}
			
			p{
				margin: 0 auto;			
				line-hight: 0;
			}

			label{
				display: inline-block;
				width: 150px;				
				clear: both;
				text-align: left;
			}

			input{
				display: inline-block;
				height: 20px;
				margin-bottom: 10px;
			}
			h1{
				margin: 0 auto;
				text-align: center;
			}
			.error{
				color:red;			
			}
			.sucess{
				color:green;			
			}
		</style>
</head>
<body>
<form action="index.php" method="post">
	<h1>Cadastro</h1>
	<br />
	<br />
	<label>Veículo:</label><t/><select name="slVeiculo" >
  <?php
    include_once("Controller/veiculoCtr.class.php");
    $obj=new veiculoCtr("findAll");    
    echo $obj->execute();
  ?>
 </select>
	<br />
	<label>Valor orçamento:</label><input type="text" name="txtValorOrc">
	<br />
	<label>Peça1:</label><t/><select name="slPeca1" >
  <?php
    include_once("Controller/pecaCtr.class.php");
    $obj=new pecaCtr("findAll");
    echo $obj->execute();
  ?>
 </select>
	<label>Peça2:</label><t/><select name="slPeca2" >
 <?php
    include_once("Controller/pecaCtr.class.php");
    $obj=new pecaCtr("findAll");    
    echo $obj->execute();
  ?>
 </select>
	<br />
	<label>Valor1:</label><input type="text" name="txtValor1">
	<label>Valor2:</label><input type="text" name="txtValor2">
	<br />
	<label>Peça3:</label><t/><select name="slPeca3" >
  <?php
    include_once("Controller/pecaCtr.class.php");
    $obj=new pecaCtr("findAll");    
    echo $obj->execute();
  ?>
 </select>
	<label>Peça4:</label><t/><select name="slPeca4" >
 <?php
    include_once("Controller/pecaCtr.class.php");
    $obj=new pecaCtr("findAll");    
    echo $obj->execute();
  ?>
 </select>
	<br />
	<label>Valor3:</label><input type="text" name="txtValor3">
	<label>Valor4:</label><input type="text" name="txtValor4">
	<input type="submit" name="btOperacao" value="Gravar"/>
</form>
	<?php
if (isset ($_POST["btOperacao"])) {
	include_once ("Controller/custoCtr.class.php");
	try {
		$custoCtr = new custoCtr();
		echo $custoCtr->execute();
	} catch (Exception $e) {
		echo "<h1 class=error> <b>ERRO:</b> " . $e->getMessage() . "</h1>";
	}
}
?>
</body>
</html>