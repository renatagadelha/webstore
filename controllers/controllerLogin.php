<?php
	require_once ("../models/session.php");
	// require_once ("../database.php");

	$login 		= $_POST['login'];
	$password 	= md5($_POST['password']);

	// echo $login, $password;

	$res = $bd->loginUser($login, $password);

?>