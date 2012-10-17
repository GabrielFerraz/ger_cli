<?php
	require_once('../include/header.php');
	require_once "../model/cliente.php";
	require_once "../model/database.php";
	require_once "../model/negociacao.php";
	$clientes = Cliente::find_all();
	$negociacao = Negociacao::find_by_id($_GET['id']);
	$clienteCadastrado = Cliente::find_by_id($negociacao->id_cliente);
?>

		<div id="body">
			<div id="center">
				<h2>Editar Negociação</h2>
				<div id="content">
					<?php echo "<form action='../controller/negociacao.php?action=update&id={$_GET['id']}' method='post' >"?>
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
						Responsável:<br />
						<select name="responsavel">
						<?php
							echo "<option value='$negociacao->responsavel'>$negociacao->responsavel</option>";
							if($negociacao->responsavel!="Joaquim"){
								echo "<option value='Joaquim'>Joaquim</option>";
							}
							if($negociacao->responsavel!="Felipe"){
								echo "<option value='Felipe'>Felipe</option>";
							}
							if($negociacao->responsavel!="Erik"){
								echo "<option value='Erik'>Erik</option>";
							}
							
						?>
						</select><br />
						Proposta:<br />
						<select name="proposta">
						<?php
							echo "<option value='$negociacao->proposta'>$negociacao->proposta</option>";
							if($negociacao->proposta!="Enviada"){
								echo "<option value='Enviada'>Enviada</option>";
							}
							if($negociacao->proposta!="Não Enviada"){
								echo "<option value='Não Enviada'>Não Enviada</option>";
							}
							
						?>
						</select><br />
						Reunião:<br />
						<select name="reuniao">
						<?php
							echo "<option value='$negociacao->reuniao'>$negociacao->reuniao</option>";
							if($negociacao->reuniao!="Marcada"){
								echo "<option value='Marcada'>Marcada</option>";
							}
							if($negociacao->reuniao!="Pendente"){
								echo "<option value='Pendente'>Pendente</option>";
							}
							if($negociacao->reuniao!="Efetuada"){
								echo "<option value='Efetuada'>Efetuada</option>";
							}
							
						?>
						</select><br />
						Status:<br />
						<select name="status">
						<?php
							echo "<option value='$negociacao->status'>$negociacao->status</option>";
							if($negociacao->status!="Ativo"){
								echo "<option value='Ativo'>Ativo</option>";
							}
							if($negociacao->status!="Inativo"){
								echo "<option value='Inativo'>Inativo</option>";
							}
							if($negociacao->status!="Contratado"){
								echo "<option value='Contratado'>Contratado</option>";
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