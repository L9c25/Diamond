<?php
//! Processamento de Criação do imovel

// Incluir arquivo de conexão com o banco
require_once "./config/connect.php";
require_once "./controllers/imovelController.php";


$arq = $_FILES['image'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (!$arq['error']) {


		// setando variaveis do Endereco
		$bairro = $_POST['bairro'];
		$rua = $_POST['rua'];
		$numero = $_POST['numero'];
		$ciep = $_POST['ciep'];
		// setando variaveis das Comodidades:
		$piscina = isset($_POST['piscina']) ? 1 : 0;
		$varanda = isset($_POST['Varanda']) ? 1 : 0;
		$banheira = isset($_POST['Banheira']) ? 1 : 0;
		$academia = isset($_POST['Academia']) ? 1 : 0;
		$estacionamento = isset($_POST['Estacionamento']) ? 1 : 0;
		$areaLazer = isset($_POST['arealazer']) ? 1 : 0;
		// setando variaveis do Corretor
		$corretor = $_POST['corretor'];


		// imagem maior que 2MB
		if ($arq['size'] > 2097152)
			die("arquivo muito grande");

		$pasta = "./assets/img/imovel/";
		$nomeimg = $arq['name'];
		$newNameImg = uniqid();
		$extension = strtolower(pathinfo($nomeimg, PATHINFO_EXTENSION));

		// tratamento caso o arquivo não seja uma imagem
		if ($extension != 'jpg' && $extension != 'png') {
			die("tipo de arquivo n aceito. mande jpg ou png");
		}


		$sucess = move_uploaded_file($arq['tmp_name'], $pasta . $newNameImg . '.' . $extension);
		if ($sucess) {
			// variavel imagem
			$imgname = $newNameImg . "." . $extension;

			$i = new daoMysql($pdo);
			//* Criando o objeto Imovel
			$imovel = new Imovel();
			$imovel->setNome($_POST['nome']);
			$imovel->setPrecoCompra($_POST['pCompra']);
			$imovel->setDescricao($_POST['descricao']);
			$imovel->setImg($imgname);
			$imovel->setDisponivel($_POST['disponibilidade']);
			$imovel->setArea($_POST['area']);
			$imovel->setQtdQuartos($_POST['qtd_quartos']);
			$imovel->setQtdBanheiros($_POST['qtd_banheiros']);
			$imovel->setQtdVagas($_POST['qtd_vagasEst']);

			//* Setando as ForgeinKeys no imovel 
			$imovel->setFkCorretor($corretor);
			$imovel->setFkEndereco($_POST['ciep']);

			//* Configurar endereço como um array associativo
			$endereco = [
				'bairro' => $bairro,
				'numero' => $numero,
				'rua' => $rua,
				'ciep' => $ciep
			];
			$imovel->setEndereco($endereco);

			//* Configurar comodidades como um array associativo
			$comodidades = [
				'piscina' => $piscina,
				'varanda' => $varanda,
				'banheira' => $banheira,
				'academia' => $academia,
				'estacionamento' => $estacionamento,
				'arealazer' => $areaLazer
			];
			$imovel->setComodidades($comodidades);




			$response = $i->criarImovel($imovel);
			if ($response) {
				print "<script>location.href = 'painel.php'</script>";
			} else {
				http_response_code(400);
				unlink($imgname);
			}
		}

	} else {
		http_response_code(400);
	}
}