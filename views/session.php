<?php
	$id_client = 1;

	session_start();
	if(isset($_SESSION['id_user']) && $_SESSION['id_user'] != 0)
	{
		$id_user	 	= $_SESSION['id_user'];
		$user_login 	= $_SESSION['user_login'] ;
		echo $id_user;
		
	}
?>