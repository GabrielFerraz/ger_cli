<?php
	require_once "../include/header.php";
	require_once "../model/cliente.php";
	require_once "../model/database.php";
?>

		<div id="body">
			<div id="center">
				<h2 >Clientes</h2>
				<div id="content">
					<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
						<thead>
							<tr>
								<th>Nome</th>  
								<th>Ver</th>
								<th>Editar</th>
								<th>Apagar</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$clientes = Cliente::find_all();
							foreach($clientes as $cliente) {
								echo "<tr class='gradeA'>";
									echo "<td>";
									echo $cliente->nome;
									echo "</td>";
									echo "<td class='center'>";
									echo "<a href='ver_cliente.php?id=$cliente->id'>Ver</a>";
									echo "</td>";
									echo "<td class='center'>";
									echo "<a href='edit_cliente.php?id=$cliente->id'>Editar</a>";
									echo "</td>";
									echo "<td class='center'>";
									echo "<a href='../controller/cliente.php?action=delete&id=$cliente->id'>Apagar</a>";
									echo "</td>";
								echo "</tr>";
							}
						?>
						</tbody>
						<tfoot>
						   <tr>
								<th>Nome</th>
								<th>Ver</th>
								<th>Editar</th>
								<th>Apagar</th>
							</tr> 
						 </tfoot> 
					</table>
				</div>
				<a href="add_cliente.php">Novo Cliente</a>
			</div>
		</div>
	</body>
</html>