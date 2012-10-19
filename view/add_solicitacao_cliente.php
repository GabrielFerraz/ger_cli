<?php
	require_once('../include/header.php');
	require_once "../model/cliente.php";
	require_once "../model/database.php";
	$cliente = Cliente::find_by_user_id($_SESSION['user_id']);
	
?>

		<div id="body">
			<div id="center">
				<h2>Adicionar Solicita��o</h2>
				<div id="content">
					<form action="../controller/solicitacao.php?action=create" method="post" name='form' onsubmit="return validatesolicitacao()">
						Pedido:<br />
						<textarea name="pedido" ></textarea><br />
						<input type="hidden" name="status" value="N�o Respondido" /><br />
						<input type="hidden" name="cliente" value="<?php echo $cliente->id?>" /><br />
						<input type="submit" value="Enviar">
					</form> 
				</div>
			</div>
		</div>
	</body>
</html>