<?php
	require_once('../include/header.php');
?>

		<div id="body">
			<div id="login">
				<div id="loginBox">
					<form id="formLogin" action="login.php" method="post">
						Login:<br />
						<input type="text" name="login" /><br />
						Senha:<br />
						<input type="password" name="senha" /><br />
						<input value="Entrar" type="submit" id="enviar" />
					</form>
				</div>
			</div>
		</div>
	</body>
</html>