<?php
	require_once "../include/header.php";
	require_once "../model/cliente.php";
	require_once "../model/negociacao.php";
	require_once "../model/database.php";
?>

		<div id="body">
			<div id="center">
				<h2 >Negociações</h2>
				<div id="content">
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
							$negociacoes = Negociacao::find_all();
							foreach($negociacoes as $negociacao) {
								$cliente = Cliente::find_by_id($negociacao->id_cliente);
								echo '<tr class="gradeA">';
									echo "<td>";
									echo "<a href='edit_negociacao.php?id=$negociacao->id'>$cliente->nome</a>";
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
						<tfoot>
						   <tr>
								<th>Cliente</th>  
								<th>Responsável</th>
								<th>Reunião</th>
								<th>Proposta</th>
								<th>Status</th>
							</tr> 
						 </tfoot> 
					</table>
				</div>
			</div>
		</div>
	</body>
</html>