<?php
// Inicialize a sessão
require_once "../../config/connect.php";
session_start();

// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página principal
if (isset($_SESSION["logado"]) && $_SESSION["logado"] === true) {
    header("location: ../../index.php");
    exit;
}

// Defina variáveis e inicialize com valores vazios
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processando dados do formulário quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifique se o nome de usuário está vazio
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor, insira o nome de usuário.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Verifique se a senha está vazia
    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor, insira sua senha.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validar credenciais
    if (empty($username_err) && empty($password_err)) {
        // Prepare uma declaração selecionada
        $sql = "SELECT id, username, senha, adm FROM usuario WHERE username = :username";

        if ($stmt = $pdo->prepare($sql)) {
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            // Definir parâmetros
            $param_username = trim($_POST["username"]);

            // Tente executar a declaração preparada
            if ($stmt->execute()) {
                // Verifique se o nome de usuário existe, se sim, verifique a senha
                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["senha"];
                        $adm = $row["adm"];
                        if (password_verify($password, $hashed_password)) {
                            // A senha está correta, então inicie uma nova sessão
                            session_start();

                            // Armazene dados em variáveis de sessão
                            $_SESSION["logado"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["adm"] = $adm;


                            // Redirecionar o usuário para a página principal
                            header("location: ../../index.php");
                        } else {
                            // A senha não é válida, exibe uma mensagem de erro genérica
                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else {
                    // O nome de usuário não existe, exibe uma mensagem de erro genérica
                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else {
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            // Fechar declaração
            unset($stmt);
        }
    }

    // Fechar conexão
    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css">
</head>

<body>
    <form action="" method="post">
        <!-- container login -->
        <div class="L_container-login">
            <!-- container esquero do container do login  -->
            <div class="L_container-lo-1">
                <div class="L_imagem-lo">
                    <img id="L_img-login" src="./imgs/imagem-login.png" alt="">
                    <img id="L_img-login2" src="./imgs/imagem-login3.png" alt="">
                    <img id="L_logo-diamond-login" src="./imgs/logo-diamond-white.png" alt="">
                </div>
            </div>
            <!-- container direito do container do login -->
            <div class="L_container-lo-2">
                <div class="L_titulo-login">
                    <h1>Olá Terráquio</h1>
                    <p>Seja Bem-Vindo ao Futuro</p>
                    <?php
                    // exibe uma caixa indicando erro no login
                    if (!empty($login_err)) {
                        echo '<div class="alert alert-danger p-1 m-0">' . $login_err . '</div>';
                    }
                    ?>
                </div>

                <div class="L_form-login">
                    <input id="login-input" type="text" required placeholder="Usuário" name="username" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback">
                        <?php echo $username_err; ?>
                    </span>
                    <!-- <br> -->
                    <input id="login-input" type="password" required placeholder="Senha" name="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback">
                        <?php echo $password_err; ?>
                    </span>
                    <!-- <br> -->
                    <input class="L_btn-login" type="submit" value="login">

                </div>

                <div class="L_txt-cadastre-login">
                    <div class="L_ou">
                        <div class="L_barra-horizontal"></div>
                        <span>ou</span>
                        <div class="L_barra-horizontal"></div>
                    </div>

                    <div class="L_cadastre-se">
                        <span>Não tem conta? <a href="#" onclick="location.href='../../pages/cadastro/cadastro.php'"">Cadastre-se</a></span>
                </div>
            </div>
            <div class=" L_redes-sociais">
                                <img src="./imgs/x-social.svg" alt="">
                                <img src="./imgs/ins-social.svg" alt="">
                                <img src="./imgs/f-social.svg" alt="">

                    </div>
    </form>
    <script src="../../assets\bootstrap\js\bootstrap.bundle.min.js"></script>
    <script src="../../assets/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.alert').fadeOut(3000)
        })
    </script>
</body>

</html>