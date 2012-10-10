<?php
	require_once "../include/header.php";
	require_once "../model/cliente.php";
	require_once "../model/database.php";
	$cliente = new Cliente;
	$cliente = Cliente::find_by_id($_GET['id']);
?>

		<div id="body">
			<div id="center">
				<h2 >Cliente</h2>
				<div id="content">
					<?php
					echo "Nome: ";
					echo $cliente->nome."<br />";
					echo "Email: ";
					echo $cliente->email."<br />";
					echo "Telefone: ";
					echo $cliente->telefone."<br />";
					?>
				</div>
			</div>
		</div>
	</body>
</html>