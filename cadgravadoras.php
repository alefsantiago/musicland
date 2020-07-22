<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Land</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="node_modules/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/cadartistas.css">
    <link rel="shortcut icon" href="img/Logotipo Oficial.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="img/Logotipo Oficial.png" alt="">
            <h2>Cadastro da gravadora</h2>
            <p class="lead">Você pode cadastrar sua Gravadora para conhecer novos Artistas ou Bandas </p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <div class="lottie">
                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_pXBLg7.json" background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Dados da Empresa</h4>
                <form class="needs-validation" action="model/dale.php" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="nome">Nome da Gravadora</label>
                            <input type="text" class="form-control" name="nomeGrav" placeholder="Ex: Thiago Corp." value="" required>
                            <div class="invalid-feedback">
                                O nome da empresa é obrigatorio
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 mb-3">
                            <label for="nome">CNPJ da empresa</label>
                            <input type="text" class="form-control" name="cnpj" placeholder="Ex: Thiago Corp." value="" required>
                            <div class="invalid-feedback">
                                O CNPJ da empresa é obrigatorio
                            </div>
                    </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email de Contato</label>
                        <input type="email" class="form-control" name="emailGrav" placeholder="examplo@exemplo.com" value="" required>
                        <div class="invalid-feedback">
                            Digite seu email.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Senha</label>
                        <input type="password" class="form-control" autocomplete="new-password" name="senhaGrav" id="password" placeholder="**********" required>
                        <div class="invalid-feedback">
                            Digite sua senha.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Confirmar senha</label>
                        <input type="password" class="form-control" autocomplete="new-password" name="confSenha" id="confirm_password" placeholder="**********" required>
                        <div class="invalid-feedback">
                            Digite sua senha novamente.
                        </div>
                        
<br>
    <h4> Coloque a logo de sua Empresa </h4>
                        <input type="file" class="form-control-file" name="fotoGrav" value="fotoGrav">
                    </div>


                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Conte um pouco sobre a empresa</span>
                        </div>
                        <textarea class="form-control" name="descGrav"></textarea>
                    </div>



                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info" required>
                        <label class="custom-control-label" for="save-info">Li e concordo com os <a href="" data-toggle="modal" data-target="#modalExemplo">Termos de Uso.</a></label>
                        <div class="invalid-feedback">
                            Confirmar os termos de uso.
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto error rerum eligendi nostrum magnam voluptatem
                                    doloremque quos, aliquid ratione expedita dolores distinctio
                                    aut placeat nesciunt. Doloribus quaerat dolor veritatis repudiandae.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto error rerum eligendi nostrum magnam voluptatem
                                    doloremque quos, aliquid ratione expedita dolores distinctio
                                    aut placeat nesciunt. Doloribus quaerat dolor veritatis repudiandae.
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="G">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
    <br>



    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="node_modules/ladda/dist/ladda.min.js"></script>
<script type="text/javascript" src="node_modules/ladda/dist/spin.min.js"></script>
<script type="text/javascript" src="js/cadartistas.js"></script>

</html>