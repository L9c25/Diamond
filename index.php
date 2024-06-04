<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My PHP Router</title>
	<link rel="stylesheet" href="../../components/header/header.css">
	<link rel="stylesheet" href="../../components/header/css/menu-lateral.css">
	<script src="../assets/jquery-3.7.1.min.js"></script>

	<style>
		body {
			background-image: url("./components/tela_inicial/bg/foto-bg-estrelas.jpg");
			background-size: contain;
			background-position: center;
			gap: 2em;
		}

		#skibid {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			gap: 80px;
		}

		.nav-button {
			padding: 10px 20px;
			background-color: #007BFF;
			color: white;
			text-align: center;
			cursor: pointer;
			display: inline-block;
			margin: 5px;
		}

		/* Contêiner oculto */
		#new-content {
			display: none;
		}

		/* Estilos para garantir margens consistentes */
		#page-content,
		#new-content {
			position: relative;
			transition: opacity 0.5s ease;
		}

		.hidden {
			opacity: 0;
		}

		footer {
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 40px;
			font-family: "Montserrat", sans-serif;
			color: white;
			margin-top: 80px;
			background-color: black;
			width: 100%;
			padding: 10px 0px;
			bottom: 0;
		}

		footer a {
			color: white;
			text-decoration: none;
		}

		@media (max-width: 800px) {
			#content {
				margin: 0 25px;
			}
		}
	</style>
</head>
<?php
include "./components/header/header.php";
?>

<body>
	<div id="content">
		<div id="skibid">
			<div id="page-content">
				<?php
				// Incluir o roteador
				require_once './assets/rotas/router.php';

				// Verificar a rota
				$route = isset($_GET['route']) ? $_GET['route'] : 'home';

				// Mostrar a página padrão se a rota não estiver definida
				if ($route === 'home') {
					include './components/tela_inicial/tela-inicio.php';
				} else {
					route($route);
				}
				?>
			</div>
		</div>
		<div id="new-content"></div>
		<footer>
			<a href="">Skibidi</a>
			<a href="">Toialet</a>
			<a href="">I love you</a>
		</footer>
	</div>

	<script>
		function navigate(route) {
			$('#skibid').addClass('hidden');
			setTimeout(function () {
				$('#new-content').load('?route=' + route + ' #skibid', function () {
					$('#skibid').html($('#new-content').html());
					$('#skibid').removeClass('hidden');
					history.pushState(null, null, '?route=' + route);
				});
			}, 300); // Tempo para o fade-out
		}

		$(document).ready(function () {
			$('#skibid').removeClass('hidden');
		});

		window.addEventListener('popstate', function () {
			// Recarregar o conteúdo quando o usuário navegar no histórico do navegador
			var route = new URLSearchParams(window.location.search).get('route') || 'home';
			$('#skibid').load('?route=' + route + ' #skibid');
		});
	</script>

	<script src="../../components/header/js/func-links.js"></script>
	<script src="../../components/header/js/scroll-header.js"></script>
	<script src="../../components/header/js/menu-lateral.js"></script>
</body>



</html>