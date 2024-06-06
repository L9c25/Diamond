<?php
//! Painel geral CRUD

// Incluir arquivo de conexão com o banco
require_once "./config/connect.php";
require_once "./controllers/imovelController.php";

session_start();
// se n for adm volta pra home
if ($_SESSION["adm"] != 1) {
	header("location: index.php");
}
?>

<head>

	<!DOCTYPE html>
	<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
		<title>DashBoard</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/painel.css">
		<link rel="stylesheet" href="./assets/Sweetalert2/sweetalert2.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="./assets/js/painel.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
			integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
			crossorigin="anonymous" referrerpolicy="no-referrer" />
		<style>
			body {
				padding-top: 60px;
				background-image: url("./assets/img/bg.jpg");
				background-size: contain;
				background-position: center;
			}

			.swal2-title {
				font-size: 1.5rem !important;
			}
		</style>
	</head>

	<?php
	include "./components/header/headerPainel.php";
	?>

<body>
	<div class="">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">

					<div class="pesq">
						<h2><b>Nossos Imoveis</b></h2>
						<form class="search-container">
							<input type="text" id="search-bar" placeholder="Busca" required>
							<img class="search-icon"
								src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png">
						</form>
					</div>
					<div>
						<a class="btn btn_add" data-toggle="modal" onclick="location.href='create.php'"><i
								class="material-icons">&#xE147;</i> <span onclick="location.href='create.php'">Add
								Imovel</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Foto</th>
						<th>Nome</th>
						<th>Endereço</th>
						<th>Preço de compra</th>
						<th>Disponibilidade</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody id="content">
					<?php
					// Defenindo variaveis:
					$HOST = $_SERVER['HTTP_HOST'];

					$d = new daoMysql($pdo);
					$dados = $d->listar($id = null, $disponibilidade = null);
					$qtd = count($dados);
					foreach ($dados as $imv):
						$id = $imv->getId();
						?>

						<tr>

							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox<?php echo $id ?>" name="options[]"
										value="<?php echo $id ?>">
									<label for="checkbox<?php echo $id ?>"></label>
								</span>
								<span class="imvID" style="display: none"><?php echo $id ?></span>
								<span class="imvImg" style="display: none"><?php echo $imv->getImg() ?></span>
							</td>
							<td>
								<picture class="img-card"
									style="background-image: url(./assets/img/imovel/<?php echo $imv->getImg() ?>);">
								</picture>
							</td>
							<td><?php echo $imv->getNome() ?></td>
							<td>
								<p class="desc">
									<?php echo $imv->getEndereco()['rua'] . ', ' . $imv->getEndereco()['bairro'] . ', ' . "n°" . $imv->getEndereco()['numero'] . ', ' . $imv->getEndereco()['planeta'] ?>
								</p>
							</td>
							<td>R$<?php echo number_format($imv->getPrecoCompra(), 2, ",", "."); ?>
							</td>
							<td>
								<?php echo $imv->getDisponivel() ? "Disponivel" : "Indisponivel" ?>
							</td>
							<td>
								<a class="edit" data-toggle="modal">
									<i class="fa-regular fa-pen-to-square" title="Edit"
										onclick="location.href='EditImovel.php/?id=<?php echo $id ?>'"></i>
								</a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
									<i class="fa-solid fa-trash" data-toggle="tooltip" title="Delete"></i>
								</a>
							</td>
						</tr>

					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>


	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Deletar Acomodação</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Tem certeza que deseja deletar essa acomodação?</p>
						<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input id="conDelet" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>


	<script>
		$(document).ready(function (e) {


			$(".delete").click(function (e) {
				imvID = $(this).closest('tr').find(".imvID").text();
				imvImg = $(this).closest('tr').find(".imvImg").text();
				$("#conDelet").click(function (e) {
					$.ajax({
						url: 'DeletImovel.php',
						type: 'POST',
						data: {
							imvID: imvID,
							img: imvImg
						},
						success: function (response) {
							var resp = response;

							//? Reserva deletada com suceso
							if (resp == 1) {
								const Toast = Swal.mixin({
									toast: true,
									position: "top-end",
									showConfirmButton: false,
									timer: 3000,
									timerProgressBar: true,
									didOpen: (toast) => {
										toast.onmouseenter = Swal.stopTimer;
										toast.onmouseleave = Swal.resumeTimer;
									}
								});
								Toast.fire({
									icon: "success",
									title: "Imovel Deletado"
								});
							}

							else if (resp != 1) {
								const Toast = Swal.mixin({
									toast: true,
									position: "top-end",
									showConfirmButton: false,
									timer: 3000,
									timerProgressBar: true,
									didOpen: (toast) => {
										toast.onmouseenter = Swal.stopTimer;
										toast.onmouseleave = Swal.resumeTimer;
									}
								});
								Toast.fire({
									icon: "error",
									title: "Não foi possivel deletar o Imovel pois ele esta sendo utilizado"
								});
							}
						},
						error: function (xhr, status, error) {
							//? Reserva Ñ foi deletada

							const Toast = Swal.mixin({
								toast: true,
								position: "top-end",
								showConfirmButton: false,
								timer: 3000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.onmouseenter = Swal.stopTimer;
									toast.onmouseleave = Swal.resumeTimer;
								}
							});
							Toast.fire({
								icon: "error",
								title: "Ocorreu algum erro"
							});
						}
					})
				})
			});
		});


		$("#search-bar").on("input", function () {
			var searchQuery = $(this).val();

			$.ajax({
				url: 'buscar.php',
				type: 'POST',
				data: { query: searchQuery },
				success: function (response) {
					$("#content").html(response); // Atualiza o conteúdo da tabela
					$("#Visualizado").html(response.qtd) // Atualiza a contagem de qts imoveis estao sendo visualizados
					console.log(response)
				},
				error: function (xhr, status, error) {
					console.error("Erro na requisição AJAX: " + status + " " + error);
				}
			});
		});

	</script>

	<script src="./assets/Sweetalert2/sweetalert2.all.min.js"></script>
</body>

</html>