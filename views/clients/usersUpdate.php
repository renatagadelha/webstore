<?php
	require_once "../../controllers/users/controllerRead.php";
	
	include "../session.php";
?>

<!doctype html>
<html lang="pt-BR">
	<head>
		<title>Lista Cadastro</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include "../link.php"; ?>
	</head>
	<body>
		<div class="container-fluid">
			<div class="container">
				<div class="row text-center title my-3">
					<div class="col">
						<h1>Editar Cadastro</h1>
					</div>
				</div>

				<form method='post' action='../../controllers/users/controllerUpdate.php'>
					<input class='input' type='hidden' name='id' value='<?php echo $dados['id_user']; ?>' />

					<div class="form-group">
						<label for="login">Login</label>
						<input type="text" class="form-control" name="login" id="login" placeholder="Insira seu login" maxlength="45" value='<?php echo $dados['user_login']; ?>'>
					</div>

					<div class="form-group">
						<label for="password">Senha</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Insira sua senha" maxlength="45">
					</div>

					<button type="submit" class="btn btn-primary" onclick='return camposObrigatorios()'>Salvar</button>
					<a href="usersAll.php" class="btn btn-danger">Cancelar</a>
				</form>
			</div>
		</div>

		<script>
			function camposObrigatorios() {
				if((document.getElementById('login').value == "") ){
					alert("Campo obrigatório: Login")
					document.getElementById('login').focus()
					return false
				}
				if((document.getElementById('password').value == "") || (document.getElementById('password').value == is_null) ){
					alert("Campo obrigatório: Senha")
					document.getElementById('password').focus()
					return false
				}
			}
		</script>
	</body>
</html>