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
		
		function loginUser($login, $password)
		{
			$consulta = "SELECT * FROM user ";
			// $consulta .= "WHERE user_login = '$login' and user_password = '$password'";
			$consulta .= "WHERE id_client = '1' and user_password = '123'";
			$res = mysqli_query($this->conexao, $consulta) or die(mysqli_error($this->conexao));

			if($res == null)
			{
				echo "erro na query";
			}
			else
			{
				if($res->num_rows == 1)
				{
					session_start();

					$registro = mysqli_fetch_array($res);

					$_SESSION['id_client'] 		= $registro['id_client'];
					$_SESSION['client_name'] 	= $registro['client_name'];

					// echo $_SESSION['id_client'];
					// echo $_SESSION['client_name'];
					header("location: ../../views/home.php");
					
				}
				else {
					header("location: ../../views/home.php");
				}
					
			}
		}
	} 
?>

















