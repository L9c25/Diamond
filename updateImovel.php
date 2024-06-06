<?php
//! Processamento de Update do imovel

require_once "./config/connect.php";
require_once "./controllers/imovelController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	try {
		$imgname = null;
		$pasta = "./assets/img/imovel/";
		$id = $_POST["id"];

		if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
			$arq = $_FILES['image'];

			if ($arq['size'] > 2097152) {
				throw new Exception("Arquivo muito grande.");
			}

			$nomeimg = $arq['name'];
			$newNameImg = uniqid();
			$extension = strtolower(pathinfo($nomeimg, PATHINFO_EXTENSION));

			if (!in_array($extension, ['jpg', 'png'])) {
				throw new Exception("Tipo de arquivo não aceito. Mande jpg ou png.");
			}

			$i = new daoMysql($pdo); // Defina o objeto i corretamente
			$oldimg = $i->viewImg($id);
			$sucess = move_uploaded_file($arq['tmp_name'], $pasta . $newNameImg . '.' . $extension);
			if (!$sucess) {
				throw new Exception("Falha ao mover o arquivo.");
			}
			unlink($pasta . $oldimg);
			$imgname = $newNameImg . "." . $extension;
		}

		$i = new daoMysql($pdo);
		$imovel = new Imovel();
		$imovel->setID($id);
		$imovel->setNome($_POST['nome']);
		$imovel->setPrecoCompra($_POST['pCompra']);
		$imovel->setDescricao($_POST['descricao']);
		$imovel->setDisponivel($_POST['disponibilidade']);
		$imovel->setArea($_POST['area']);
		$imovel->setQtdQuartos($_POST['qtd_quartos']);
		$imovel->setQtdBanheiros($_POST['qtd_banheiros']);
		$imovel->setQtdVagas($_POST['qtd_vagasEst']);
		$imovel->setFkCorretor($_POST['corretor']);
		
		$imovel->setFkComodidades($_POST['fkcomodidade']);
		$imovel->setFkEndereco($_POST['fkendereco']);

		$imovel->setImg($imgname ? $imgname : $i->viewImg($id)); // Fallback to old image if not updated

		$endereco = [
			'bairro' => $_POST['bairro'],
			'numero' => $_POST['numero'],
			'rua' => $_POST['rua'],
			'ciep' => $_POST['ciep']
		];
		$imovel->setEndereco($endereco);

		$comodidades = [
			'piscina' => isset($_POST['piscina']) ? 1 : 0,
			'varanda' => isset($_POST['Varanda']) ? 1 : 0,
			'banheira' => isset($_POST['Banheira']) ? 1 : 0,
			'academia' => isset($_POST['Academia']) ? 1 : 0,
			'estacionamento' => isset($_POST['Estacionamento']) ? 1 : 0,
			'arealazer' => isset($_POST['arealazer']) ? 1 : 0
		];
		$imovel->setComodidades($comodidades);

		$response = $i->updateImovel($imovel);

		if ($response) {
			header("Location: painel.php");
			exit();
		} else {
			throw new Exception("Erro ao atualizar o imóvel.");
		}
	} catch (Exception $e) {
		if ($imgname) {
			unlink($pasta . $imgname);
		}
		echo "Erro: " . $e->getMessage(); 
	}
}

