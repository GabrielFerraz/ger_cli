<?php
	require_once('../include/header.php');
	require_once "../model/cliente.php";
	require_once "../model/database.php";
	$cliente = new Cliente;
	$cliente = Cliente::find_by_id($_GET['id']);
?>

		<div id="body">
			<div id="center">
				<?php 
					echo "<form action='../controller/cliente.php?action=update&id={$_GET['id']}' method='post'>";
					echo "Nome:<br />";
					echo "<input type='text' name='nome' value='$cliente->nome' /><br />";
					echo "Email:<br />";
					echo "<input type='text' name='email' value='$cliente->email' /><br />";
					echo "Telefone:<br />";
					echo "<input type='text' name='telefone' value='$cliente->telefone' /><br />";?>
					<input type="submit" value="Enviar">
				</form> 
			</div>
		</div>
	</body>
</html>