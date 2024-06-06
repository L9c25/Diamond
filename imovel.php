<?php
session_start();
require_once "./config/connect.php";
require_once "./controllers/imovelController.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idIMV = $_POST['id'];
} else {
    print "<script>location.href = 'index.php'</script>";
}

$d = new daoMysql($pdo);
$dados = $d->listar($id = $idIMV, $disponibilidade = null);
$imv = $dados[0];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title><?php echo $imv->getnome() ?></title>
</head>
<?php
if (isset($_SESSION["adm"])) {
    if ($_SESSION["adm"] == 1) {
        include "./components/header/headeradm.php";
    } else if ($_SESSION["adm"] == 0) {
        include "./components/header/header.php";
    }
} else {
    include "./components/header/headerguest.php";
}
?>

<body>
    <?php
    include ("./pages/imovel-detalhes/imovel-detail.php")
        ?>
</body>

</html>