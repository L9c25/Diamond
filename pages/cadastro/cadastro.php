<?php 
require_once "../../config/connect.php";

// Definindo variáveis
$username = $senha = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nome de usuário
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor coloque um nome de usuário.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
    } else{
        // Prepare uma declaração selecionada
        $sql = "SELECT id FROM usuario WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = trim($_POST["username"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "Este nome de usuário já está em uso.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Validar senha
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor insira uma senha.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $senha = trim($_POST["password"]);
    }
    
    // Validar e confirmar a senha
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, confirme a senha.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($senha != $confirm_password)){
            $confirm_password_err = "A senha não confere.";
        }
    }
    
    // Verifique os erros de entrada antes de inserir no banco de dados
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare uma declaração de inserção
        $sql = "INSERT INTO usuario (username, senha, adm, data) VALUES (:username, :senha, 1, :data)";
         
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":senha", $param_password, PDO::PARAM_STR);
            date_default_timezone_set('America/Sao_Paulo');
            $param_data = date("Y-m-d H:i:s");
            $stmt->bindParam(":data", $param_data, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = $username;
            $param_password = password_hash($senha, PASSWORD_DEFAULT); // Creates a password hash
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Redirecionar para a página de login
                header("location: ../login/login.php");
            } else{
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
    <link rel="stylesheet" href="./cadastro.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <!-- container login -->
    <div class="L_container-login">
        <!-- container esquero do container do login  -->
        <div class="L_container-ca-1">
            <div class="L_imagem-lo">
                <img id="L_img-cad" src="./imgs/img-cadastro.png" alt="">
                <img id="L_img-cad2" src="./imgs/img-cadastro2.png" alt="">
                <img id="L_logo-diamond-login" src="./logo-diamond-white.png" alt="">
            </div>
        </div>
        <!-- container direito do container do login -->
        <div class="L_container-ca-2">
            <div class="L_titulo-login">
                <h1>Olá Terráquio</h1>
                <p>Seja Bem-Vindo ao Futuro</p>
            </div>
            <div class="L_form-cadastro">
                <div class="L_container-input">
                    <span>Crie um nome de Usuário</span>
                    <input name="username" id="login-input" type="text" required placeholder="Usuário" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>

                <div class="L_container-input">
                    <span>Crie uma Senha.</span>
                    <input name="password" id="login-input" type="password" required placeholder="Senha" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $senha; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>

                <div class="L_container-input">
                    <span>Por favor, confirme a Senha.</span>
                    <input name="confirm_password" id="login-input" type="password" required placeholder="Senha" <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                </div>

                <input class="L_btn-login" type="submit" value="Cadastro">

            </div>

            <div class="L_txt-cadastre-login">
                <div class="L_ou">
                    <div class="L_barra-horizontal"></div>
                    <span>ou</span>
                    <div class="L_barra-horizontal"></div>
                </div>

                <div class="L_cadastre-se">
                    <span>Já tem uma conta? <a href="#" onclick="location.href='../login/login.php'"">Faça o login</a></span>
                </div>
            </div>
            <div class="L_redes-sociais">
                <img src="./imgs/x-social.svg" alt="">
                <img src="./imgs/ins-social.svg" alt="">
                <img src="./imgs/f-social.svg" alt="">
            </div>
        </div>
    </div>
    </form>
</body>

</html>