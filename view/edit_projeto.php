<?php
	require_once('../include/header.php');
	require_once "../model/negociacao.php";
	require_once "../model/database.php";
	$negociacoes = Negociacao::find_all();
	$projeto = Projeto::find_by_id($_GET['id']);
	$negociacaoCadastrado = Negociacao::find_by_id($projeto->id_negociacao);
?>

		<div id="body">
			<div id="center">
				<h2>Editar Projeto</h2>
				<div id="negociacao">
					<?php echo "<form action='../controller/projeto.php?action=update&id={$_GET['id']}' method='post' >"?>
						Responsavel:<br />
						<select name="te">
							<?php
								echo "<option value=$negociacaoCadastrado->id>$negociacaoCadastrado->responsavel</option>";
								foreach($negociacoes as $negociacao){
									if($negociacaoCadastrado->id != $negociacao->id){
										echo "<option value=$negociacao->id>$negociacao->nome</option>";
									}
								}
							?>
						</select><br />
						<br />
						<input type="date" name="data_inicio" ><?php echo $projeto->data_inicio;?></input><br />
						<input type="date" name="data_final" ><?php echo $projeto->data_final;?></input><br />
						<input type="number" name="parcelas"  ><?php echo $projeto->data_parcelas;?></input><br />
						<input type="submit" value="Enviar">
					</form> 
				</div>
			</div>
		</div>
	</body>
</html>
