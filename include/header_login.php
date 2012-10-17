<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	<?php
		if (!isset($_SESSION)){
			session_start();
			$_SESSION['login'] = false;
		}
	?>
		<title>Gerenciador</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css">

	</head>
	<body>
		<div id="head">
			<div id="logo"></div>
			<div id="menu">
				<a class="linkMenu" href="../view/index.php">Home</a>
				<span class="spanMenu">|</span>
				<a class="linkMenu" href="../view/solicitacoes.php">Solicitacoes</a>
				<span class="spanMenu">|</span>
				<a class="linkMenu" href="../view/negociacoes.php">Negociacoes</a>
				<span class="spanMenu">|</span>
				<a class="linkMenu" href="../view/projetos.php">Projetos</a>
				<span class="spanMenu">|</span>
				<a class="linkMenu" href="../view/clientes.php">Clientes</a>
			</div>
		</div>