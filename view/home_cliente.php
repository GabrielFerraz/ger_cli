<?php
	require_once "../include/header.php";
	require_once "../model/cliente.php";
	require_once "../model/solicitacao.php";
	require_once "../model/negociacao.php";
	require_once "../model/projeto.php";
	require_once "../model/database.php";
	$cliente = new Cliente;
	$_SESSION['permissao'] = 2;
	$cliente = Cliente::find_by_user_id($_SESSION['user_id']);
?>

		<div id="body">
			<div id="center">
				<h2 >Bem Vindo <?php echo $cliente->nome?></h2>
				<div id="content">
					<h3>Solicitações</h3>
					<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
						<thead>
							<tr>
								<th>Cliente</th>  
								<th>Solicitação</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$solicitacoes = Solicitacao::find_by_sql("SELECT * FROM solicitacoes WHERE id_cliente = {$cliente->id}");
							foreach($solicitacoes as $solicitacao) {
								echo '<tr class="gradeA" id="$id">';
									echo "<td>";
									echo "<a href='edit_solicitacao_cliente.php?id=$solicitacao->id'>$cliente->nome</a>";
									echo "</td>";
									echo "<td>";
									echo $solicitacao->pedido;
									echo "</td>";
									echo "<td>";
									echo $solicitacao->status;
									echo "</td>";
								echo "</tr>";
							}
						?>
						</tbody>
					</table>
					<a href="add_solicitacao_cliente.php">Nova Solicitação</a>
					<h3>Negociações</h3>
					<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
						<thead>
							<tr>
								<th>Cliente</th>  
								<th>Responsável</th>
								<th>Reunião</th>
								<th>Proposta</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$negociacoes = Negociacao::find_by_sql("SELECT * FROM negociacoes WHERE id_cliente = {$cliente->id}");
							foreach($negociacoes as $negociacao) {
								echo '<tr class="gradeA">';
									echo "<td>";
									echo $cliente->nome;
									echo "</td>";
									echo "<td>";
									echo $negociacao->responsavel;
									echo "</td>";
									echo "<td>";
									echo $negociacao->reuniao;
									echo "</td>";
									echo "<td>";
									echo $negociacao->proposta;
									echo "</td>";
									echo "<td>";
									echo $negociacao->status;
									echo "</td>";
								echo "</tr>";
							}
						?>
						</tbody>
					</table>
					<h3>Projetos</h3>
					<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
						<thead>
							<tr>
								<th>Responsavel</th>  
								<th>Inicio</th>
								<th>Fim</th>
								<th>Parcelas</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$projetos = Projeto::find_all();
							foreach($projetos as $projeto) {
								$negociacao = Negociacao::find_by_id($projeto->id_negociacao);
								if($negociacao->id_cliente == $cliente->id){
								echo '<tr class="gradeA">';
									echo "<td>";
									echo $negociacao->responsavel;
									echo "</td>";
									echo "<td>";
									echo $projeto->data_inicio;
									echo "</td>";
									echo "<td>";
									echo $projeto->data_final;
									echo "</td>";
									echo "<td>";
									echo $projeto->parcelas;
									echo "</td>";
								echo "</tr>";
								}
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>