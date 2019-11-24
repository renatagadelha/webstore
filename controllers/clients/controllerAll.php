<?php
	require_once "../../models/user.php";

	class UsersController { 

		public function all() {
			$bd = new bancoDados("localhost", "root", "", "survey");

			$res = $bd->allUser();
			return($res);
        }
    }
?>