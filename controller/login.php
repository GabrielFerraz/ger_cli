<?php
require_once "../model/user.php";
require_once "../model/database.php";

	$user = $_POST['login'];
	$pass = $_POST['senha'];
	$aut = User::authenticate($user,$pass);
	if($aut) {
	    $x = $aut->id;
	    $_SESSION['user_id'] = $x;
	    $_SESSION['permissao'] = $aut->permissao;
	    $_SESSION['login'] = true;
	    if($aut->permissao==2){
             header("location: ../view/home_cliente.php");
	    }
	    else header("location: ../view/index.php");
	}
	else{
	    $_SESSION['flash_notice'] = "Login e Senha n&atilde;o conferem";
		header("location: ../view/login.php");

	}


?>
