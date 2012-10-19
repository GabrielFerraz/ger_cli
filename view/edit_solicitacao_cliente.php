<?php
	require_once('../include/header_cliente.php');
	require_once "../model/cliente.php";
	require_once "../model/database.php";
	require_once "../model/solicitacao.php";
	$solicitacao = Solicitacao::find_by_id($_GET['id']);
	$clienteCadastrado = Cliente::find_by_id($solicitacao->id_cliente);
		if($_SESSION['permissao']!=2 ){
            header("location: ../view/login.php");
		}
?>

		<div id="body">
			<div id="center">
				<h2>Editar Solicitação</h2>
				<div id="content">
					<?php echo "<form action='../controller/solicitacao.php?action=update&id={$_GET['id']}' method='post' >"?>
						Pedido:<br />
						<textarea name="pedido"  ><?php echo $solicitacao->pedido;?></textarea><br />
						<input type="hidden" name="status" value="<?php echo $solicitacao->status?>" /><br />
						<input type="hidden" name="cliente" value="<?php echo $clienteCadastrado->id?>" /><br />
						<input type="submit" value="Enviar">
					</form> 
				</div>
			</div>
		</div>
	</body>
</html>
