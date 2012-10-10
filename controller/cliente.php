<?php
	require_once "../model/cliente.php";
	require_once "../model/database.php";
	
	$cliente = new Cliente;
	$action = $_GET['action'];
	switch($action){
		case 'create':
			$cliente->nome = $_POST['nome'];
			$cliente->email = $_POST['email'];
			$cliente->telefone = $_POST['telefone'];
			$cliente->create();
			header("location: ../view/clientes.php");
			break;
		case "delete":
			break;
	}

?>