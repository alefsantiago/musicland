<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Land</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="../node_modules/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../img/Logotipo Oficial.png" type="image/x-icon">
</head>

<body class="text-center">
    <form class="form-signin" action="../model/logar.php" method="POST">
        <img class="mb-4" src="../img/Logotipo Oficial.png" alt="" width="150" height="150">
        <h1 class="h3 mb-3 font-weight-normal">Logar</h1>
        <label for="email" class="sr-only">Email</label>
        <input type="email" autocomplete="username" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" autocomplete="current-password" name="senha" class="form-control" placeholder="Senha" required>
        <div class="checkbox mb-3">
            <label>
                <a href="">Esqueceu sua senha?</a>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </form>

</body>
<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="../node_modules/ladda/dist/ladda.min.js"></script>
<script type="text/javascript" src="../node_modules/ladda/dist/spin.min.js"></script>
<script type="text/javascript" src="../js/login.js"></script>

</html>