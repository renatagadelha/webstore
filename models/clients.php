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
		
		function allUser()
		{
			$res = mysqli_query($this->conexao, "select * from user") or die("erro");
			return $res;
		}
		
		function readUser($id)
		{
			$res = mysqli_query($this->conexao, "select * from user where id_user = $id") or die("erro");
			return $res;
		}

		function createUser($l, $p)
		{
			$consulta  = "INSERT INTO user (user_login, user_password) ";
			$consulta .= " VALUES ('$l', '$p')";
			$res = mysqli_query($this->conexao, $consulta) or die(mysqli_error($this->conexao));
		}

		function updateUser($id, $l, $p){
			$update = "update user ";
			$update .= "set user_login = '$l', user_password = '$p' ";
			$update .= "where id_user = $id";
			$res = mysqli_query($this->conexao, $update) or die(mysqli_error($this->conexao));
		}

		function deleteUser($id)
		{
			$update = "delete from user ";
			$update .= "where id_user = $id";
			$res = mysqli_query($this->conexao, $update) or die(mysqli_error($this->conexao));
		}
		
	} 
?>

















