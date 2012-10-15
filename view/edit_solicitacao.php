<?php
	require_once('../include/header.php');
	require_once "../model/cliente.php";
	require_once "../model/database.php";
	require_once "../model/solicitacao.php";
	$clientes = Cliente::find_all();
	$solicitacao = Solicitacao::find_by_id($_GET['id']);
	$clienteCadastrado = Cliente::find_by_id($solicitacao->id_cliente);
?>

		<div id="body">
			<div id="center">
				<h2>Editar Solicitação</h2>
				<div id="content">
					<?php echo "<form action='../controller/solicitacao.php?action=update&id={$_GET['id']}' method='post' >"?>
						Cliente:<br />
						<select name="cliente">
							<?php
								echo "<option value=$clienteCadastrado->id>$clienteCadastrado->nome</option>";
								foreach($clientes as $cliente){
									if($clienteCadastrado->id != $cliente->id){
										echo "<option value=$cliente->id>$cliente->nome</option>";
									}
								}
							?>
						</select><br />
						Pedido:<br />
						<textarea name="pedido"  ><?php echo $solicitacao->pedido;?></textarea><br />
						<select name="status">
						<?php
							echo "<option value='$solicitacao->status'>$solicitacao->status</option>";
							if($solicitacao->status!="Não Respondido"){
								echo "<option value='Não Respondido'>Não Respondido</option>";
							}
							if($solicitacao->status!="Respondido"){
								echo "<option value='Respondido'>Respondido</option>";
							}
							if($solicitacao->status!="Em Negociação"){
								echo "<option value='Em Negociação'>Em Negociação</option>";
							}
						?>
						<select>
						<input type="submit" value="Enviar">
					</form> 
				</div>
			</div>
		</div>
	</body>
</html>