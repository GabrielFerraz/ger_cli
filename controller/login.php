<?php

	$user = $_POST['login'];
	$pass = $_POST['senha'];
	$aut = new User;
	if($aut->authenticate($user,$pass)) {
	   	$_SESSION['user_id'] = $aut->id;
	   	$_SESSION['permissao'] = $aut->permissao;
	    $_SESSION['login'] = true;
	    header("location: ../view/index.php");
	}
	else{
	    $_SESSION['flash_notice'] = "Login e Senha n&atilde;o conferem";

	}


?>