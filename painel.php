<?php
//! Painel geral CRUD
 
// Incluir arquivo de conexão com o banco
require_once "./config/connect.php";
require_once "./controllers/imovelController.php";
?>

<?php
// Inicia a sessão
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
	<title>Painel</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/painel.css">
	<link rel="stylesheet" href="./assets/Sweetalert2/sweetalert2.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="./assets/js/painel.js"></script>

<body>
	<div class="">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Acomodação</b></h2>
					</div>
					<div class="col-sm-6">
						<a class="btn btn-success" data-toggle="modal" onclick="location.href='create.php'"><i class="material-icons">&#xE147;</i> <span
								onclick="location.href='create.php'">Add Imovel</span></a>
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
						<th>Disponivilidade</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>


					<?php
					// Defenindo variaveis:
					$HOST = $_SERVER['HTTP_HOST'];

					$d = new daoMysql($pdo);
					$dados = $d->listar($id=null, $disponibilidade=null);
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
								<p class="desc"><?php echo $imv->getEndereco()['rua'] . ', ' . $imv->getEndereco()['bairro'] . ', ' . "n°" .$imv->getEndereco()['numero'] . ', ' . $imv->getEndereco()['planeta']?></p>
							</td>
							<td>R$<?php echo number_format($imv->getPrecoCompra(), 2, ",", "."); ?>
							</td>
							<td>
								<?php echo $imv->getDisponivel()?>
							</td>
							<td>
								<a class="edit" data-toggle="modal"><i class="material-icons"
										data-toggle="tooltip" title="Edit" 
										onclick="location.href='EditImovel.php/?id=<?php echo $id?>'">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons"
										data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							</td>
						</tr>

					<?php endforeach ?>
				</tbody>
			</table>


			<div class="clearfix">
				<div class="hint-text">Showing <b><?php echo $qtd ?></b> out of <b><?php echo $qtd ?></b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
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
						<input type="submit" id="conDelet" class="btn btn-danger" value="Delete">
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
							//? Reserva deletada com suceso
							const Toast = Swal.mixin({
								toast: true,
								position: "top-end",
								showConfirmButton: false,
								timer: 1500,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.onmouseenter = Swal.stopTimer;
									toast.onmouseleave = Swal.resumeTimer;
								}
							});
							Toast.fire({
								icon: "success",
								title: "Acomodação Deletada"
							});
						},
						error: function (xhr, status, error) {
							//? Reserva Ñ foi deletada
							alert("Ocorreu um erro ao tentar deletar o imovel.")
						}
					})
				})
			});
		});


	</script>

	<script src="./assets/Sweetalert2/sweetalert2.all.min.js"></script>
</body>

</html>