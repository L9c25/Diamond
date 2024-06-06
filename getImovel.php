<?php
//! Pegar as informaçoes do imovel especifico para que possa ser feita atualizaçoes do mesmo.

// Incluir arquivo de conexão com o banco
require_once "./config/connect.php";
require_once "./controllers/imovelController.php";

// Verifica se o ID da acomodação foi recebido
if (isset($_POST['imvID'])) {
    $aID = $_POST['imvID'];
   
	header('Location: EditImovel.php');


    $i = new daoMysql($pdo);
    $response = $i->listar($id=$aID);

	header('Content-Type: application/json');
	$response = [
				'id' => $response[0]->getId(),
				'nome' => $response[0]->getNome(),
				'preco' => $response[0]->getPrecoCompra(),
				'descricao' => $response[0]->getDescricao(),
				'img' => $response[0]->getImg(),
			];

	
    echo json_encode($response); // Se $d for um array, por exemplo
} else {
    http_response_code(400);
    echo "ID da acomodação não recebido.";
}
