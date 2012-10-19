<?php
	require_once('../include/header_login.php');
	require_once "../model/database.php";


if(isset($_SESSION['flash_notice'])) {
    echo "<p class='flash_bad'>".$_SESSION['flash_notice']."</p>";
    unset($_SESSION['flash_notice']);
}
?>
	<div id="body">
		<div id="login">
			<div id="loginBox">
			
				<form id="formLogin" action="../controller/login.php" method="post">
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
