<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--! favicon -->
	<link rel="shortcut icon" href="./assets/img/Logo.png" type="image/x-icon">
	<!--! Bootstrap -->
	<link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css">
	<!--! CSS -->
	<link rel="stylesheet" href="imoveis.css">

	<title>imoveis</title>
</head>

<body>
	<!--! pesquisa -->
	<div class="L_container-imoveis">
		<section class="L_pesquisa-imoveis">
			<div class="L_logo-diamond-imoveis">
				<img src="./logo-diamond-white.png" alt="logo">
			</div>
			<form class="L_input-pesquisa-imoveis" id="formPesquisa" method="GET" action="pesquisar.php">
				<input type="search" placeholder="pesquise moradias...">
				
				<button type="button" id="btnPesquisar">
					<img src="./icon-pesquisa.svg" alt="icon-pesquisa">
				</button>
			</form>
			

			
		</section>

		<!-- grid dos quartos-->
		<section class="sec-grid-imoveis">
			<div class="grid-imoveis row gap-5 justify-content-center">
				<!--! card unitario do quarto -->
				<div class="card">
					<div class="card-img">
						<div class="overlay o1"></div>
					</div>
					<div class="card-text">
						<h2 class="text-dark">Moradia Luxuosa</h2>
						<R1 class="text-secondary">Family House</R1><br>
						<R1 class="fs-4 text-dark"><b>R$</b> 4.000.000</R1>
					</div>
					<div class="botao ">
						<button type="button" onclick="location.href='quarto.html'">Conferir</button>
					</div>
				</div>
				
				<!--! card unitario do quarto -->
				<div class="card">
					<div class="card-img">
						<div class="overlay o2"></div>
					</div>
					<div class="card-text">
						<h2 class="text-dark">Quarto de Luxo</h2>
						<R1 class="text-secondary"><s><b>R$</b> 199,00</s></R1><br>
						<R1 class="fs-4 text-dark"><b>R$</b> 75,00</R1>
					</div>
					<div class="botao">
						<button type="button" onclick="location.href='quarto.html'">Conferir</button>
					</div>
				</div>

				<div class="card">
					<div class="card-img">
						<div class="overlay o1"></div>
					</div>
					<div class="card-text">
						<h2 class="text-dark">Quarto de Luxo</h2>
						<R1 class="text-secondary"><s><b>R$</b> 199,00</s></R1><br>
						<R1 class="fs-4 text-dark"><b>R$</b> 75,00</R1>
					</div>
					<div class="botao ">
						<button type="button" onclick="location.href='quarto.html'">Conferir</button>
					</div>
				</div>
				
			</div>
		</section>
	</div>

	

	<!--! Overlay para o header-mobile -->
	<section class="overlay-header"></section>

	
	<!--! Script -->
	
	<script src="./assets/bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>