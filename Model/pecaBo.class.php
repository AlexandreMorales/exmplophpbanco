<?php
class pecaBo {

  private $dao;
  
  public function __construct()
  {
  	include_once("pecaDao.class.php");
  	$this->dao=new pecaDao();
  }
  public function __destruct()
  {
    unset($this->dao); 
  }
  public function save()
  {
  }
    public function findAll()
  {
  	$linhas=$this->dao->find("*","");
  	$options="<option value=''>" .
  			"[selecione..]</option>";
  	if ($linhas==0)
  		return $options;
  		
  	$row = $this->dao->getRecordSet();
  	
  	for ( $i = 0; $i < count($row);  $i++ ) 
  	{
		$options.="<option value='".
		   $row[$i]["id"]."'>".
		   $row[$i]["nome"]."</option>";
	}
	return $options;
  }
  
}
?>