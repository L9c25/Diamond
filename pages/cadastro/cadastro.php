<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./pages/cadastro/cadastro.css">
</head>

<body>
    <!-- container login -->
    <div class="L_container-login">
        <!-- container esquero do container do login  -->
        <div class="L_container-ca-1">
            <div class="L_imagem-lo">
                <img id="L_img-login" src="./pages/cadastro/imgs/img-cadastro.png" alt="">
                <img id="L_logo-diamond-login" src="./pages/login/imgs/logo-diamond-white.png" alt="">
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
                    <input id="login-input" type="text" required placeholder="Usuário">
                </div>

                <div class="L_container-input">
                    <span>Crie uma Senha.</span>
                    <input id="login-input" type="password" required placeholder="Senha">
                </div>

                <div class="L_container-input">
                    <span>Por favor, confirme a Senha.</span>
                    <input id="login-input" type="password" required placeholder="Senha">
                </div>

                <div class="L_btn-login">
                    <span>Cadastro</span>
                </div>

            </div>

            <div class="L_txt-cadastre-login">
                <div class="L_ou">
                    <div class="L_barra-horizontal"></div>
                    <span>ou</span>
                    <div class="L_barra-horizontal"></div>
                </div>

                <div class="L_cadastre-se">
                    <span>Já tem uma conta? <a href="#" onclick="navigate('login')">Faça o login</a></span>
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