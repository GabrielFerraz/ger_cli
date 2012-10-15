<?php
	require_once "../include/header.php";
	require_once "../model/cliente.php";
	require_once "../model/solicitacao.php";
	require_once "../model/database.php";
?>

		<div id="body">
			<div id="center">
				<h2 >Solicitações</h2>
				<div id="content">
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
							$solicitacoes = Solicitacao::find_all();
							foreach($solicitacoes as $solicitacao) {
								$cliente = Cliente::find_by_id($solicitacao->id_cliente);
								$id = 0;
								echo '<tr onload="mudaCor(document.getElementById('."'$id'".'),'."'$solicitacao->status'".')" class="gradeA" id="$id">';
									echo "<td>";
									echo "<a href='edit_solicitacao.php?id=$solicitacao->id'>$cliente->nome</a>";
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
						<tfoot>
						   <tr>
								<th>Cliente</th>  
								<th>Solicitação</th>
								<th>Status</th>
							</tr> 
						 </tfoot> 
					</table>
				</div>
				<a href="add_solicitacao.php">Nova Solicitação</a>
			</div>
		</div>
	</body>
</html>