<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	<?php
		if (!isset($_SESSION)){
			session_start();
			$_SESSION['login'] = false;
		}
		if($_SESSION["login"]==false) {
			header("location: ../view/login.php");
		}
	?>
		<title>Gerenciador</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<script>
			function validateCliente(){
				var campos = "";
				if (document.forms["form"]["nome"].value==null ||
				    document.forms["form"]["nome"].value==""){
					campos = campos + "nome "
				}
				if (document.forms["form"]["email"].value==null ||
				    document.forms["form"]["email"].value==""){
					campos = campos + "email "
				}
				if (document.forms["form"]["telefone"].value==null ||
				    document.forms["form"]["telefone"].value==""){
					campos = campos + "telefone"
				}
				if(campos != ""){
					var string = "Você precisa preencher o(s) campo(s): "+ campos;
					alert(string);
					return false;
				}
			}
			function validateSolicitacao(){
				var campos = "";
				if (document.forms["form"]["pedido"].value==null ||
				    document.forms["form"]["pedido"].value==""){
					alert("O campo Pedido não foi preenchido");
					return false;
				}
			}
		</script>
	</head>
	<body>
		<div id="head">
			<div id="logo"></div>
			<div id="menu">
				<a class="linkMenu" href="../view/index.php">Home</a>
				<span class="spanMenu">|</span>
				<a class="linkMenu" href="../view/solicitacoes.php">Solicitações</a>
				<span class="spanMenu">|</span>
				<a class="linkMenu" href="../view/negociacoes.php">Negociações</a>
				<span class="spanMenu">|</span>
				<a class="linkMenu" href="../view/projetos.php">Projetos</a>
				<span class="spanMenu">|</span>
				<a class="linkMenu" href="../view/clientes.php">Clientes</a>
			</div>
		</div>
