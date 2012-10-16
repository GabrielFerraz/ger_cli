<?php
	require_once "../model/projeto.php";
	require_once "../model/database.php";
	
	$negociacao = new Projeto;
	$action = $_GET['action'];
	$id = $_GET['id'];
	switch($action){
		case 'create':
			$negociacao->id_cliente = $_POST['cliente'];
			$negociacao->responsavel = $_POST['responsavel'];
			$negociacao->reuniao = $_POST['reuniao'];
			$negociacao->proposta = $_POST['proposta'];
			$negociacao->status = $_POST['status'];
			$negociacao->create();
			header("location: ../view/negociacoes.php");
			break;
		case "delete":
			$negociacao = Negociacao::find_by_id($id);
			$negociacao->delete();
			header("location: ../view/negociacoes.php");
			break;
		case "update":
			$negociacao = Negociacao::find_by_id($id);
			$negociacao->id_cliente = $_POST['cliente'];
			$negociacao->responsavel = $_POST['responsavel'];
			$negociacao->reuniao = $_POST['reuniao'];
			$negociacao->proposta = $_POST['proposta'];
			$negociacao->status = $_POST['status'];
			echo $id;
			$negociacao->update();
			
			header("location: ../view/negociacoes.php");
			break;
	}

?>
