<?php
require_once "./config/connect.php";
require_once "./controllers/imovelController.php";

$query = $_POST['query'] ?? '';

$d = new daoMysql($pdo);
$dados = $d->listar(null, 1, $query);

if (count($dados) > 0) {
    foreach ($dados as $imv) {
        $id = $imv->getId();
        ?>
        <div class="card">
            <div class="card-img">
                <div class="overlay" style="background-image: url(./assets/img/imovel/<?= $imv->getImg() ?>);"></div>
            </div>
            <div class="card-text">
                <h2 class="text-dark"><?= $imv->getNome() ?></h2>
                <R1 class="text-secondary">
                    <?= $imv->getEndereco()['rua'] . ', ' . $imv->getEndereco()['bairro'] . ', ' . "n°" . $imv->getEndereco()['numero'] . ', ' . $imv->getEndereco()['planeta'] ?>
                </R1><br>
                <R1 class="fs-4 text-dark">
                    <b>R$</b><?= number_format($imv->getPrecoCompra(), 2, ",", "."); ?>
                </R1>
            </div>
            <div class="botao">
                <form method="POST" action="imovel.php">
                    <input type="hidden" name="id" value="<?= $imv->getId(); ?>">
                    <button type="submit">Conferir</button>
                </form>
            </div>
        </div>
        <?php
    }
} else {
    echo "<tr><td colspan='7'>Nenhum imóvel encontrado</td></tr>";
}
?>
