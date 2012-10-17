<?php
	require_once "../model/cliente.php";
	require_once "../model/user.php";
	require_once "../model/database.php";
	
	$cliente = new Cliente;
	$user = new User;
	$action = $_GET['action'];
	$id = $_GET['id'];
	switch($action){
		case 'create':
			$user->login = $_POST['email'];
			$user->senha = $_POST['email'];
			$user->permissao = 2;
			$user->create();
			$users = User::find_all();
			foreach($users as $user){
				if($user->login == $_POST['email']){
					$cliente->id_user = $user->id;
				}
			}
			echo $user->login;
			$cliente->nome = $_POST['nome'];
			$cliente->email = $_POST['email'];
			$cliente->telefone = $_POST['telefone'];
			$cliente->create();
			header("location: ../view/clientes.php");
			break;
		case "delete":
			$cliente = Cliente::find_by_id($id);
			$cliente->delete();
			header("location: ../view/clientes.php");
			break;
		case "update":
			$cliente = Cliente::find_by_id($id);
			$cliente->nome = $_POST['nome'];
			$cliente->email = $_POST['email'];
			$cliente->telefone = $_POST['telefone'];
			$cliente->update();
			header("location: ../view/clientes.php");
			break;
	}

?>