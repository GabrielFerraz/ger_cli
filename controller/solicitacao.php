<?php
	require_once "../model/solicitacao.php";
	require_once "../model/database.php";
	
	$solicitacao = new Solicitacao;
	$action = $_GET['action'];
	$id = $_GET['id'];
	switch($action){
		case 'create':
			$solicitacao->id_cliente = $_POST['cliente'];
			$solicitacao->pedido = $_POST['pedido'];
			$solicitacao->status = $_POST['status'];
			$solicitacao->create();
			header("location: ../view/solicitacoes.php");
			break;
		case "delete":
			$solicitacao = Solicitacao::find_by_id($id);
			$solicitacao->delete();
			header("location: ../view/solicitacoes.php");
			break;
		case "update":
			$solicitacao = Solicitacao::find_by_id($id);
			$solicitacao->id_cliente = $_POST['cliente'];
			$solicitacao->pedido = $_POST['pedido'];
			$solicitacao->status = $_POST['status'];
			echo $id;
			$solicitacao->update();
			$id_cliente = $_POST['cliente'];
			if($_POST['status']=="Em Negociaчуo"){
				header("location: ../view/add_negociacao.php?id=$id_cliente");
			}else{
				header("location: ../view/solicitacoes.php");
			}
			break;
	}

?>