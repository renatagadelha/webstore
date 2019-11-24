<?php
	/************************************************************************
		class bancoDados
	************************************************************************/

	class bancoDados
	{
		private $conexao;
		//construtor da classe
		function __construct($servidor, $login, $senha, $banco)
		{
			$this->conexao = mysqli_connect($servidor, $login, $senha) or die(mysqli_error($this->conexao));
			
			$bd = mysqli_select_db($this->conexao, $banco) or die(mysqli_error($this->conexao));
		}
		
		function allProducts()
		{
			$res = mysqli_query($this->conexao, "select * from product") or die("erro");
			return $res;
		}
		
		function readProduct($id)
		{
			$res = mysqli_query($this->conexao, "select * from product where id_product = $id") or die("erro");
			return $res;
		}
		
	} 
?>

















