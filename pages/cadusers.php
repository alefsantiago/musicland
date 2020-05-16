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
    <link rel="stylesheet" href="../css/cadusers.css">
    <link rel="shortcut icon" href="../img/Logotipo Oficial.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../img/Logotipo Oficial.png" alt="">
            <h2>Cadastro do usuário</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form
                group has a validation state that can be triggered by attempting to submit the form without completing
                it.</p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <div class="lottie">
                    <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_9eLZ98.json"
                        background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Dados Pessoais</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nome de usuário</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                O nome de usuário é obrigatório.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Digite sua senha.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Senha</label>
                        <input type="text" class="form-control" id="address" placeholder="123456" required>
                        <div class="invalid-feedback">
                            Digite sua senha novamente.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Confirmar senha</label>
                        <input type="text" class="form-control" id="address2" placeholder="123456" required>
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
                    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
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
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
    <br>


    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="../node_modules/ladda/dist/ladda.min.js"></script>
<script type="text/javascript" src="../node_modules/ladda/dist/spin.min.js"></script>
<script type="text/javascript" src="../js/cadusers.js"></script>

</html>