<?php
	require_once('../include/header.php');
	require_once "../model/database.php";
	require_once "../model/cliente.php";

if (isset($_POST)){
	$user = $_POST['login'];
	$pass = $_POST['senha'];
	$aut = new Cliente;
	if($aut->authenticate($user,$pass)) {
	   	$_SESSION['user_id'] = $aut->id;
	    $_SESSION['login'] = true;
	    header("location: ../view/admin_home.php");
	}
	else{
	    $_SESSION['flash_notice'] = "Login e Senha n&atilde;o conferem";

	}
}

if(isset($_SESSION['flash_notice'])) {
    echo "<div class='flash_bad'>".$_SESSION['flash_notice']."</div>";
    unset($_SESSION['flash_notice']);
}
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
