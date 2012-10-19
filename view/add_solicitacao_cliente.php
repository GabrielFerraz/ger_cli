<?php
	require_once('../include/header_cliente.php');
	require_once "../model/cliente.php";
	require_once "../model/database.php";
	$cliente = Cliente::find_by_user_id($_SESSION['user_id']);
		if($_SESSION['permissao']!=2 || $_SESSION['login']== false ){
            header("location: ../view/login.php");
		}

	
?>

		<div id="body">
			<div id="center">
				<h2>Adicionar Solicitação</h2>
				<div id="content">
					<form action="../controller/solicitacao.php?action=create" method="post" name='form' onsubmit="return validatesolicitacao()">
						Pedido:<br />
						<textarea name="pedido" ></textarea><br />
						<input type="hidden" name="status" value="Não Respondido" /><br />
						<input type="hidden" name="cliente" value="<?php echo $cliente->id?>" /><br />
						<input type="submit" value="Enviar">
					</form> 
				</div>
			</div>
		</div>
	</body>
</html>
