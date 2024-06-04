<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página principal
if (isset($_SESSION["logado"]) && $_SESSION["logado"] === true) {
    header("location: index.php");
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
        $sql = "SELECT id, username,                                                                                                     FROM usuario WHERE username = :username";

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
                        if (password_verify($password, $hashed_password)) {
                            // A senha está correta, então inicie uma nova sessão
                            session_start();

                            // Armazene dados em variáveis de sessão
                            $_SESSION["logado"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirecionar o usuário para a página principal
                            header("location: index.php");
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./pages/login/login.css">
</head>

<body>
    <!-- container login -->
    <div class="L_container-login">
        <!-- container esquero do container do login  -->
        <div class="L_container-lo-1">
            <div class="L_imagem-lo">
                <img id="L_img-login" src="./pages/login/imgs/imagem-login.png" alt="">
                <img id="L_img-login2" src="./pages/login/imgs/imagem-login3.png" alt="">
                <img id="L_logo-diamond-login" src="./pages/login/imgs/logo-diamond-white.png" alt="">
            </div>
        </div>
        <!-- container direito do container do login -->
        <div class="L_container-lo-2">
            <div class="L_titulo-login">
                <h1>Olá Terráquio</h1>
                <p>Seja Bem-Vindo ao Futuro</p>
            </div>
            <div class="L_form-login">
                <input id="login-input" type="text" required placeholder="Usuário">
                    <!-- <br> -->
                <input id="login-input" type="password" required placeholder="Senha">
                    <!-- <br> -->
                <div class="L_btn-login">
                    <span>login</span>
                </div>

            </div>

            <div class="L_txt-cadastre-login">
                <div class="L_ou">
                    <div class="L_barra-horizontal"></div>
                    <span>ou</span>
                    <div class="L_barra-horizontal"></div>
                </div>

                <div class="L_cadastre-se">
                    <span>Não tem conta? <a href="#" onclick="navigate('cadastro')" >Cadastre-se</a></span>
                </div>
            </div>
            <div class="L_redes-sociais">
                <img src="./pages/login/imgs/x-social.svg" alt="">
                <img src="./pages/login/imgs/ins-social.svg" alt="">
                <img src="./pages/login/imgs/f-social.svg" alt="">
            </div>
        </div>
    </div>
</body>

</html>