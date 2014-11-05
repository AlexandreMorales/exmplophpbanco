<?php
 class pecaCtr
 {
 	private $operacao="";
	public function __construct()
	{
		$numArgs=func_num_args();
		
		if ($numArgs==1 && 
		    func_get_arg(0)=="findAll")
		{
		    $this->operacao="findAll";
		    return;	
		}
		
		
	}
	public function execute()
	{
		if ($this->operacao=="")
			$this->operacao=
			      $_POST['btOperacao'];
			      
		include_once("Model/pecaBo.class.php");
		
		$obj=new pecaBO();
		
		switch ( $this->operacao ) {
			case "findAll":
				return $obj->findAll();
				break;
				
			case "Gravar":
				return $obj->save();
			
				break;
		}
		
		return $obj->save();
	}
 }
?>