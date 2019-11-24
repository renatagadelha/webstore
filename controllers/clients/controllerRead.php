<?php
	require_once "../../models/user.php";

	$id = $_GET['id'];
	$bd = new bancoDados("localhost", "root", "", "survey");
	$tabela = $bd->readUser($id);
	$dados = mysqli_fetch_array($tabela);
?>