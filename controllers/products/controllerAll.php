<?php
	require_once "../models/products.php";

	$bd = new bancoDados("localhost", "root", "", "webstore");

	$res = $bd->allProducts();
	return($res);
?>