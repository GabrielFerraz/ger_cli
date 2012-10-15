<?php
	require_once('../include/header.php');
	require_once "../model/cliente.php";
	require_once "../model/database.php";
	$clientes = Cliente::find_all();
	
?>

		<div id="body">
			<div id="center">
				<h2>Adicionar Solicitação</h2>
				<div id="content">
					<form action="../controller/solicitacao.php?action=create" method="post" name='form' onsubmit="return validatesolicitacao()">
						Cliente:<br />
						<select name="cliente">
							<?php
								foreach($clientes as $cliente){
									echo "<option value=$cliente->id>$cliente->nome</option>";
								}
							?>
						</select><br />
						Pedido:<br />
						<textarea name="pedido" ></textarea><br />
						<input type="hidden" name="status" value="Não Respondido" /><br />
						<input type="submit" value="Enviar">
					</form> 
				</div>
			</div>
		</div>
	</body>
</html>