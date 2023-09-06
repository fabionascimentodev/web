<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./View/css/login.css" />
  <title>LendMe - Login</title>
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
</head>

<body>
  <div class="screen">

    <div class="login-section">
      <div class="login-content">

        <div class="access">
          <h1>Área de Acesso</h1>
          <p>Seja Bem Vindo</p>
          <p>Faça o login para ter acesso à sua conta.</p>
        </div>

        <form action="" id="loginForm">
          <input class="inputSign" type="text" placeholder="Informe seu e-mail ou seu nome de usuário" id="usuario" required>
          <input class="inputSign" type="password" placeholder="Senha" id="password" required>

          <div class="login-action">
            <div class="show-password">
              <input type="checkbox" name="" id="showPassword">
              <label for="showPassword">Exibir senha</label>
            </div>

            <a href="esqueceuSenha.php">Esqueceu a senha?</a>
          </div>

          <button id="signIn" type="submit">Entrar</button>
        </form>
      </div>
    </div>
  </div>

  <script src="./Controller//login//login.js"></script>

</body>

</html>