<!--! pesquisa -->
<div class="L_container-imoveis">
	<section class="L_pesquisa-imoveis">
		<div class="L_logo-diamond-imoveis">
			<img src="./pages/imoveis/logo-diamond-white.png" alt="logo">
		</div>
		<form class="L_input-pesquisa-imoveis" id="formPesquisa" method="GET" action="pesquisar.php">
			<input id="search-bar" type="search" placeholder="pesquise moradias...">

			<button type="button" id="btnPesquisar">
				<img src="./pages/imoveis/icon-pesquisa.svg" alt="icon-pesquisa">
			</button>
		</form>



	</section>

	<!-- grid dos quartos-->
	<section class="sec-grid-imoveis">
		<div class="grid-imoveis row gap-5 justify-content-center" id="content">


			<?php
			$d = new daoMysql($pdo);
			//* Mostar APENAS os disponiveis
			$dados = $d->listar($id = null, $disponibilidade = 1);
			$qtd = count($dados);
			foreach ($dados as $imv):
				$id = $imv->getId();
				?>
				<!--! card unitario do quarto -->
				<div class="card">
					<div class="card-img">
						<div class="overlay"
							style="background-image: url(./assets/img/imovel/<?php echo $imv->getImg() ?>);"></div>
					</div>
					<div class="card-text">
						<h2 class="text-dark"><?php echo $imv->getNome() ?></h2>
						<R1 class="text-secondary">
							<?php echo $imv->getEndereco()['rua'] . ', ' . $imv->getEndereco()['bairro'] . ', ' . "n°" . $imv->getEndereco()['numero'] . ', ' . $imv->getEndereco()['planeta'] ?>
						</R1><br>
						<R1 class="fs-4 text-dark">
							<b>R$</b><?php echo number_format($imv->getPrecoCompra(), 2, ",", "."); ?></R1>
					</div>
					<div class="botao">
						<form method="POST" action="imovel.php">
							<input type="hidden" name="id" value="<?php echo $imv->getId(); ?>">
							<button type="submit">Conferir</button>
						</form>
					</div>
				</div>

			<?php endforeach ?>
		</div>
	</section>
</div>



<!--! Overlay para o header-mobile -->
<section class="overlay-header"></section>
<script>
		$(document).ready(function (e) {
			$("#search-bar").on("input", function () {
				var searchQuery = $(this).val();

				$.ajax({
					url: 'buscar2.php',
					type: 'POST',
					data: { query: searchQuery },
					success: function (response) {
						$("#content").html(response); // Atualiza o conteúdo da tabela
					},
					error: function (xhr, status, error) {
						console.error("Erro na requisição AJAX: " + status + " " + error);
					}
				});
			});
		})
	</script>

<!--! Script -->

<script src="./assets/bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>