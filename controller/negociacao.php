<?php
	require_once "../model/negociacao.php";
	require_once "../model/database.php";
	
	$negociacao = new Negociacao;
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
			$negociacao->update();
			if($_POST['status']=="Contratado"){
				header("location: ../view/add_projeto.php?id=$id");
			}else{
				header("location: ../view/negociacoes.php");
			}
			break;
	}

?>