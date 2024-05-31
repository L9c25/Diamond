<?php
//! Processamento de exclusão do imovel
	require_once("config/connect.php");
	require_once("controllers/imovelController.php");

	$I_id = $_POST['imvID'];
	$I_img = $_POST['img'];

	$d = new daoMysql($pdo);
	$response = $d->deletImovel($I_id, $I_img);

	if ($response){
		return($response);
	} else{
		return($response);
	}