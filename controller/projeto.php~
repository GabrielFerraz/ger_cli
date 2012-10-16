<?php
	require_once "../model/projeto.php";
	require_once "../model/database.php";
	
	$projeto = new Projeto;
	$action = $_GET['action'];
	$id = $_GET['id'];
	switch($action){
		case 'create':
			$projeto->id_negociacao = $_POST['negociacao'];
			$projeto->data_inicio = $_POST['data_inicio'];
			$projeto->data_final = $_POST['data_final'];
			$projeto->parcelas = $_POST['parcelas'];
			$projeto->create();
			header("location: ../view/projetos.php");
			break;
		case "delete":
			$projeto = Projeto::find_by_id($id);
			$projeto->delete();
			header("location: ../view/projetos.php");
			break;
		case "update":
			$projeto = Projeto::find_by_id($id);
			$projeto->id_negociacao = $_POST['negociacao'];
			$projeto->data_inicio = $_POST['data_inicio'];
			$projeto->data_final = $_POST['data_final'];
			$projeto->parcelas = $_POST['parcelas'];
			echo $id;
			$projeto->update();
			
			header("location: ../view/projetos.php");
			break;
	}

?>
