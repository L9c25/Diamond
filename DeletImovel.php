<?php
//! Processamento de exclusão do imovel
	require_once("config/connect.php");
	require_once("controllers/imovelController.php");

	$I_id = $_POST['imvID'];
	$I_img = $_POST['img'];

	$d = new daoMysql($pdo);
	$response = $d->deletImovel($I_id, $I_img);

	if ($response){
		$r = 1;
		echo json_encode($r);
	} else{
		$r = 0;
		echo json_encode($r);
	}