<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Cadastro</title>
</head>

<body>

    <input type="checkbox" id="click">
    <div class="main-container">
        <div class="form-container">
            <!-- Formulário de Login -->
            <div class="sign-in">
                <form method="post" action="./php/login.php" id="formlogin" name="formlog">
                    <h1>Login</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>ou use sua conta</span>
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="password" name="senha" id="senha" placeholder="Senha" required />
                    <a href="./senha.php" class="forgot-pass">Esqueceu sua senha?</a>
                    <input type="submit" value="Entrar" />
                </form>
            </div>

            <!-- Formulário de Cadastro -->
            <div class="sign-up">
                <form method="post" action="./php/register.php" id="formsignup" name="formsignup">
                    <h1>Criar uma conta</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>ou use o e-mail para registro</span>
                    <input type="text" name="nome" id="nome" placeholder="Nome" required />
                    <input type="email" name="email" id="email-register" placeholder="Email" required />
                    <input type="password" name="senha" id="senha-register" placeholder="Senha" required />
                    <input class="btn btn-primary" type="submit" value="Cadastrar" />
                </form>
            </div>
        </div>

        <div class="slide-container">
            <div class="slide-panel">
                <div class="slide-left">
                    <h1>Olá, Amigo(a)!</h1>
                    <p>Insira seus dados pessoais e comece sua jornada conosco</p>
                    <label for="click" class="slide">Cadastro</label>
                </div>
                <div class="slide-right">
                    <h1>Bem vindo de volta!</h1>
                    <p>Para se manter conectado conosco, faça login com suas informações pessoais</p>
                    <label for="click" class="slide">Entrar</label>
                </div>
            </div>
        </div>
    </div>

</body>

</html>