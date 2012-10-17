<?php
	require_once "../include/header.php";
	require_once "../model/negociacao.php";
	require_once "../model/projeto.php";
	require_once "../model/database.php";
?>

		<div id="body">
			<div id="center">
				<h2 >Projetos</h2>
				<div id="content">
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
								$id = 0;
									echo "<td>";
									echo "<a href='edit_projeto.php?id=$projeto->id'>$negociacao->responsavel</a>";
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
						?>
						</tbody>
						<tfoot>
						   <tr>
								<th>Responsavel</th>  
								<th>Inicio</th>
								<th>Fim</th>
								<th>Parcelas</th>
							</tr> 
						 </tfoot> 
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
