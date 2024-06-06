<?php
require_once "./config/connect.php";
require_once "./controllers/imovelController.php";

$query = $_POST['query'] ?? '';

$d = new daoMysql($pdo);
$dados = $d->listar(null, null, $query);

if (count($dados) > 0) {
    foreach ($dados as $imv) {
        $id = $imv->getId();
       echo "<tr>
                <td>
                    <span class=\"custom-checkbox\">
                        <input type=\"checkbox\" id=\"checkbox$id\" name=\"options[]\" value=\"$id\">
                        <label for=\"checkbox$id\"></label>
                    </span>
                    <span class=\"imvID\" style=\"display: none\">$id</span>
                    <span class=\"imvImg\" style=\"display: none\">".$imv->getImg()."</span>
                </td>
                <td>
                    <picture class=\"img-card\" style=\"background-image: url(./assets/img/imovel/".$imv->getImg().");\"></picture>
                </td>
                <td>".$imv->getNome()."</td>
                <td>
                    <p class=\"desc\">".$imv->getEndereco()['rua'].", ".$imv->getEndereco()['bairro'].", n°".$imv->getEndereco()['numero'].", ".$imv->getEndereco()['planeta']."</p>
                </td>
                <td>R$".number_format($imv->getPrecoCompra(), 2, ",", ".")."</td>
                <td>".($imv->getDisponivel() ? "Disponivel" : "Indisponivel")."</td>
                <td>
                    <a class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\" onclick=\"location.href='EditImovel.php/?id=$id'\">&#xE254;</i></a>
                    <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='7'>Nenhum imóvel encontrado</td></tr>";
}

