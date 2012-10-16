<?php
	require_once('../include/header.php');
	require_once "../model/negociacao.php";
	require_once "../model/database.php";
	$negociacoes = Cliente::find_all();
	
?>

		<div id="body">
			<div id="center">
				<h2>Adicionar Projeto</h2>
				<div id="content">
					<form action="../controller/solicitacao.php?action=create" method="post" name='form' onsubmit="return validatesolicitacao()">
						Cliente:<br />
						<select name="cliente">
							<?php
								foreach($negociacoes as $negociacao){
									echo "<option value=$negociacao->id>$negociacao->responsavel</option>";
								}
							?>
						</select><br />
						Data inicio: <input type="date" name="data_inicio"/><br />
						Data Fim: <input type="date" name="data_final"/><br />
						Parcelas: <input type="number" name="parcelas"/><br />
						<input type="submit" value="Enviar">
					</form> 
				</div>
			</div>
		</div>
	</body>
</html>
