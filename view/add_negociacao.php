<?php
	require_once('../include/header.php');
	require_once "../model/cliente.php";
	require_once "../model/database.php";
	$id = $_GET['id'];
	$cliente = Cliente::find_by_id($id);
?>

		<div id="body">
			<div id="center">
				<h2>Adicionar Negociação</h2>
				<div id="content">
					<form action="../controller/negociacao.php?action=create" method="post" name='form'>
						Cliente:<?php echo " $cliente->nome"?><br /><br />
						<input type="hidden" name="cliente" value="<?php echo $id?>" />
						Responsável:<br />
						<select name="responsavel">
							<option value="Joaquim">Joaquim</option>
							<option value="Felipe">Felipe</option>
							<option value="Erik">Erik</option>
						</select><br />
						<input type="hidden" name="proposta" value="Não Enviada" /><br />
						<input type="hidden" name="reuniao" value="Pendente" /><br />
						<input type="hidden" name="status" value="Ativo" /><br />
						<input type="submit" value="Enviar">
					</form> 
				</div>
			</div>
		</div>
	</body>
</html>