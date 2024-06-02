<?php
//! Painel de Criação do imovel

// Incluir arquivo de conexão com o banco
require_once "./config/connect.php";
require_once "./controllers/imovelController.php";
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
		<form action="processa_imovel.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Informações do Imóvel</legend>
				<label for="nome">Nome:</label>
				<input type="text" id="nome" name="nome" required>

				<label for="pCompra">Preço de Compra:</label>
				<input type="number" step="0.01" id="pCompra" name="pCompra" required>

				<label for="descricao">Descrição:</label>
				<textarea id="descricao" name="descricao" required></textarea>

				<label for="img">Imagem:</label>
				<input type="file" id="img" name="image" required>

				<label for="disponibilidade">Disponível:</label>
				<select id="disponibilidade" name="disponibilidade">
					<option value="1">Sim</option>
					<option value="0">Não</option>
				</select>

				<label for="area">Área (m²):</label>
				<input type="number" step="0.01" id="area" name="area" required>

				<label for="qtd_quartos">Quantidade de Quartos:</label>
				<input type="number" id="qtd_quartos" name="qtd_quartos" required>

				<label for="qtd_banheiros">Quantidade de Banheiros:</label>
				<input type="number" id="qtd_banheiros" name="qtd_banheiros" required>

				<label for="qtd_vagasEst">Quantidade de Vagas de Estacionamento:</label>
				<input type="number" id="qtd_vagasEst" name="qtd_vagasEst" required>
			</fieldset>

			<fieldset>
				<legend>Endereço</legend>
				<label for="bairro">Bairro:</label>
				<input type="text" id="bairro" name="bairro" required>

				<label for="rua">Rua:</label>
				<input type="text" id="rua" name="rua" required>

				<label for="numero">Número:</label>
				<input type="number" id="numero" name="numero" required>

				<label for="ciep">CIEP:</label>
				<select name="ciep" id="ciep" require>
					<?php 
						$p = new daoMysql($pdo);
						$dados = $p->viewCiep();

						foreach($dados as $ciep):
					?>
					<option value="<?php echo $ciep['id']?>"><?php echo $ciep['planet']?></option>
					<?php endforeach;?>
				</select>
			</fieldset>

			<fieldset id="gpChek">
				<legend>Comodidades</legend>
				<label for="piscina">Piscina:</label>
				<input type="checkbox" name="piscina" id="piscina">

				<label for="arealazer">Área de Lazer:</label>
				<input type="checkbox" name="arealazer" id="arealazer">

				<label for="varanda">Varanda:</label>
				<input type="checkbox" name="Varanda" id="varanda">

				<label for="banheira">Banheira:</label>
				<input type="checkbox" name="Banheira" id="banheira">

				<label for="academia">Academia:</label>
				<input type="checkbox" name="Academia" id="academia">

				<label for="estacionamento">Estacionamento:</label>
				<input type="checkbox" name="Estacionamento" id="estacionamento">

			</fieldset>

			<fieldset>
				<legend>Corretor</legend>
				<label for="corretor">Corretores:</label>
				<select name="corretor" id="corretor" require>
					<?php 
						$p = new daoMysql($pdo);
						$dados = $p->viewCorretor();

						foreach($dados as $corretor):
					?>
					<option value="<?php echo $corretor['id']?>">
						<?php echo $corretor['name']?>
						|| Telefone: <?php echo $corretor['phone']?>	
					</option>
					<?php endforeach;?>
				</select>
			</fieldset>

			<button type="submit">Cadastrar Imóvel</button>
		</form>
	</div>

	<script src="assets/bootstrap/bootstrap.min.js"></script>
</body>

</html>