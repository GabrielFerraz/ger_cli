<?php
	require_once('../include/header.php');
?>

		<div id="body">
			<div id="center">
				<form action="../controller/cliente.php?action=create" method="post">
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
	</body>
</html>