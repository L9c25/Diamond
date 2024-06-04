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
			margin: 0 25px;
			background-image: url("./components/tela_inicial/bg/foto-bg-estrelas.jpg");
			background-size: contain;
			background-position: center;
			gap: 2em;
		}

		#content{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
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
	</style>
</head>
<?php
include "./components/header/header.php";
?>

<body>
	<div id="content">
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
		<div id="new-content"></div>
	</div>
</body>

<script>
	function navigate(route) {
		$('#page-content').addClass('hidden');
		setTimeout(function () {
			$('#new-content').load('?route=' + route + ' #page-content', function () {
				$('#page-content').html($('#new-content').html());
				$('#page-content').removeClass('hidden');
				history.pushState(null, null, '?route=' + route);
			});
		}, 300); // Tempo para o fade-out
	}

	$(document).ready(function () {
		$('#page-content').removeClass('hidden');
	});

	window.addEventListener('popstate', function () {
		// Recarregar o conteúdo quando o usuário navegar no histórico do navegador
		var route = new URLSearchParams(window.location.search).get('route') || 'home';
		$('#page-content').load('?route=' + route + ' #page-content');
	});
</script>

<script src="../../components/header/js/func-links.js"></script>
<script src="../../components/header/js/scroll-header.js"></script>
<script src="../../components/header/js/menu-lateral.js"></script>

</html>