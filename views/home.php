<?php
	require_once "../controllers/products/controllerAll.php";
	// require_once "../controllers/controllerLogin.php";

	// include "session.php";
	// echo $client_name . " Seja bem vindo...";
?>

<!doctype html>
<html lang="pt-BR">
	<head>
		<title>Produtos Ativos</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include "link.php"; ?>
	</head>
	<body>
		<?php include "navbar.php"; ?>

		<div class="container-fluid">
			<div class="container">
				<div class="row text-center title my-3">
					<div class="col">
						<h1>Produtos Ativos</h1>
					</div>
				</div>

				<?php
					if($res != NULL)
					{
						echo "<div class='container'><div class='row'>";
						while($registro = mysqli_fetch_array($res))
						{	
							echo "<div class='col product'>";
								echo "<img src='./assets/products/". $registro['product_image'] ."' class='img-fluid' alt='". $registro['product_title'] ."'>";
								echo "<div class='product-title'>". $registro['product_title'] . "</div>";
								echo "<div class='product-price'>$ ". number_format($registro['product_price'], 2) . "</div>";
								echo "<a href='../../controllers/campaigns/controllerDelete.php?id_product=$registro[id_product]' onclick='return confirmDelete()' class='btn btn-outline-primary btn-block'>Comprar</a>";
							echo "</div>";
						}
						echo "</div></div>";
					}
				?>

			</div>
		</div>

		<script>
			document.getElementById('nav-campaign').className += ' active';

			function confirmDelete() {
				if (confirm("Deseja realmente excluir o cadastro?") == true)
					return true;
				else
					return false;
			}
		</script>

	</body>
</html>