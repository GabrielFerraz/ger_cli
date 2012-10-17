<?php
	require_once('../include/header.php');
?>

		<div id="body">
			<div id="center">
			<h2>Adicionar Cliente</h2>
				<div id="content">
				<form action="../controller/cliente.php?action=create" method="post" name='form' >
					Nome:<br />
					<input type="text" name="nome" /><br />
					Email:<br />
					<input type="text" name="email" /><br />
					Telefone:<br />
					<input type="text" name="telefone" /><br />
					<input type="submit" value="Enviar">
				</form> 
				</div>
			</div>
		</div>
	</body>
</html>