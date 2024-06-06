<?php
//! Painel de Criação do imovel

// Incluir arquivo de conexão com o banco
require_once "./config/connect.php";
require_once "./controllers/imovelController.php";

$p = new daoMysql($pdo);
if (!isset($_GET["id"])){
	header("Location: painel.php");
}
$imID = $_GET["id"];
$p = new daoMysql($pdo);
$imovel = $p->listar($id= $imID, $disponibilidade=null);
$imovel = $imovel[0];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XDXD</title>
	<link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
		}

		.container {
			width: 50%;
			margin: auto;
			overflow: hidden;
			background: #fff;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			margin-top: 50px;
		}

		h2 {
			text-align: center;
			color: #333;
		}

		form {
			display: flex;
			flex-direction: column;
		}

		fieldset {
			border: 1px solid #ccc;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 8px;
		}

		legend {
			padding: 0 10px;
			font-weight: bold;
		}

		label {
			margin-top: 10px;
			font-weight: bold;
		}

		input[type="text"],
		input[type="number"],
		input[type="file"],
		textarea,
		select {
			width: 100%;
			padding: 10px;
			margin-top: 5px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		button {
			padding: 10px;
			background: #5cb85c;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 10px;
		}

		button:hover {
			background: #4cae4c;
		}
		#gpChek input{
			margin-right: 20px;
		}
	</style>
</head>

<body>

	<div class="container">
		<h2>Cadastro de Imóvel</h2>
		<form action="../updateImovel.php" method="POST" enctype="multipart/form-data">

			<!--!! Enviando o chaves inportantes !! -->
			<input type="hidden" name="id" value="<?php echo $imovel->getId(); ?>">
			<input type="hidden" name="fkcomodidade" value="<?php echo $imovel->getFkComodidades(); ?>">
			<input type="hidden" name="fkendereco" value="<?php echo $imovel->getFkEndereco(); ?>">


			<fieldset>

				<legend>Informações do Imóvel</legend>
				<label for="nome">Nome:</label>
				<input type="text" id="nome" name="nome" value="<?php echo $imovel->getNome()?>" required>

				<label for="pCompra">Preço de Compra:</label>
				<input value="<?php echo $imovel->getPrecoCompra()?>" type="number" step="0.01" id="pCompra" name="pCompra" required>

				<label for="descricao">Descrição:</label>
				<textarea id="descricao" name="descricao" required><?php echo $imovel->getDescricao()?></textarea>

				<label for="img">Imagem:</label>
				<input type="file" id="img" name="image">

				<label for="disponibilidade">Disponível:</label>
				<select id="disponibilidade" name="disponibilidade">
					<?php $disp = $imovel->getDisponivel();
						$indisponivel = null;
						if ($disp == 0) $indisponivel = "selected";
					?>
					<option value="1">Sim</option>
					<option value="0" <?php echo $indisponivel?>>Não</option>
				</select>

				<label for="area">Área (m²):</label>
				<input value="<?php echo $imovel->getArea()?>" type="number" step="0.01" id="area" name="area" required>

				<label for="qtd_quartos">Quantidade de Quartos:</label>
				<input value="<?php echo $imovel->getQtdQuartos()?>"  type="number" id="qtd_quartos" name="qtd_quartos" required>

				<label for="qtd_banheiros">Quantidade de Banheiros:</label>
				<input  value="<?php echo $imovel->getQtdBanheiros()?>" type="number" id="qtd_banheiros" name="qtd_banheiros" required>

				<label for="qtd_vagasEst">Quantidade de Vagas de Estacionamento:</label>
				<input value="<?php echo $imovel->getQtdVagas()?>" type="number" id="qtd_vagasEst" name="qtd_vagasEst" required>
			</fieldset>

			<fieldset>
				<legend>Endereço</legend>
				<label for="bairro">Bairro:</label>
				<input value="<?php echo $imovel->getEndereco()["bairro"]?>" type="text" id="bairro" name="bairro" required>

				<label for="rua">Rua:</label>
				<input value="<?php echo $imovel->getEndereco()["rua"]?>" type="text" id="rua" name="rua" required>

				<label for="numero">Número:</label>
				<input value="<?php echo $imovel->getEndereco()["numero"]?>" type="number" id="numero" name="numero" required>

				<label for="ciep">CIEP:</label>
				<select name="ciep" id="ciep" require>
					<?php 
						$p = new daoMysql($pdo);
						$dados = $p->viewCiep();
						$imvCiep =  $imovel->getEndereco()["planeta"];
						foreach($dados as $ciep):
						$selecCiep = null;
						if ($ciep["planet"] == $imvCiep) $selecCiep = "selected"
					?>
					<option value="<?php echo $ciep['id']?>" <?php echo $selecCiep?>><?php echo $ciep['planet']?></option>
					<?php endforeach;?>
				</select>
			</fieldset>

			<fieldset id="gpChek">
				<legend>Comodidades</legend>
				<label for="piscina">Piscina:</label>
				<input type="checkbox" name="piscina" id="piscina" 
				<?php $imovel->getComodidades()["piscina"] ? print("checked") : ""?>>

				<label for="arealazer">Área de Lazer:</label>
				<input type="checkbox" name="arealazer" id="arealazer"
				<?php $imovel->getComodidades()["areaLazer"] ? print("checked") : ""?>>

				<label for="varanda">Varanda:</label>
				<input type="checkbox" name="Varanda" id="varanda"
				<?php $imovel->getComodidades()["varanda"] ? print("checked") : ""?>>

				<label for="banheira">Banheira:</label>
				<input type="checkbox" name="Banheira" id="banheira"
				<?php $imovel->getComodidades()["banheira"] ? print("checked") : ""?>>

				<label for="academia">Academia:</label>
				<input type="checkbox" name="Academia" id="academia"
				<?php $imovel->getComodidades()["academia"] ? print("checked") : ""?>>

				<label for="estacionamento">Estacionamento:</label>
				<input type="checkbox" name="Estacionamento" id="estacionamento"
				<?php $imovel->getComodidades()["estacionamento"] ? print("checked") : ""?>>

			</fieldset>

			<fieldset>
				<legend>Corretor</legend>
				<label for="corretor">Corretores:</label>
				<select name="corretor" id="corretor" require>
					<?php 
						$p = new daoMysql($pdo);
						$dados = $p->viewCorretor();

						foreach($dados as $corretor):
						$idCorretor = $imovel->getFkCorretor();
						$selecCorretor = null;
						if ($corretor["id"] == $idCorretor) $selecCorretor = "selected"
					?>
					<option value="<?php echo $corretor['id']?>" <?php echo $selecCorretor?>>
						<?php echo $corretor['name']?>
						|| Telefone: <?php echo $corretor['phone']?>
					</option>
					<?php endforeach;?>
				</select>
			</fieldset>
			
			<button type="submit">Atualizar Imóvel</button>
		</form>
	</div>

	<script src="assets/bootstrap/bootstrap.min.js"></script>
</body>

</html>