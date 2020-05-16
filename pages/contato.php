<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Land</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="../node_modules/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/contato.css">
    <link rel="shortcut icon" href="../img/Logotipo Oficial.png" type="image/x-icon">
</head>

<body>
    <div class="jumbotron">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        <div class="btn-sign">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                data-target="#modalExemplo">Inscreva-se</button>
            <button type="button" class="btn btn-outline-primary">Entrar</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inscreva-se na Music Land</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="users" src="../img/user.png">
                    <p id="text-users">
                        Lorem ipsum, dolor sit amet <br>
                        Accusantium qui aut ipsa,laef <br>
                        nulla ea natus autem.
                    </p>
                    <div class="btn-inscreva">
                        <a href="./cadusers.php"><button type="button" class="btn btn-outline-primary">Inscreva-se para
                                Fãs</button></a>
                    </div>
                    <hr>
                    <img class="users" src="../img/artistas.png">
                    <p id="text-users">
                        Lorem ipsum, dolor sit amet <br>
                        Accusantium qui aut ipsa,laef <br>
                        nulla ea natus autem.
                    </p>
                    <div class="btn-inscreva">
                        <a href="./cadartistas.php"><button type="button" class="btn btn-outline-primary">Inscreva-se
                                para Artistas</button></a>
                    </div>
                    <hr>
                    <img class="users" src="../img/record.png">
                    <p id="text-users">
                        Lorem ipsum, dolor sit amet <br>
                        Accusantium qui aut ipsa,laef <br>
                        nulla ea natus autem.
                    </p>
                    <div class="btn-inscreva">
                        <a href="./cadgravadoras.php"><button type="button" class="btn btn-outline-primary">Inscreva-se
                                para
                                Gravadoras</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="../index.php">Music Land</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/quemsomos.php">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Planos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/contato.php">Contato <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Divulgue</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Navegar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Gêneros do momentos</a>
                        <a class="dropdown-item" href="#">Lançamentos</a>
                        <a class="dropdown-item" href="#">Descobrir</a>
                        <a class="dropdown-item" href="#">Show</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gênero
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Rock</a>
                        <a class="dropdown-item" href="#">Funk</a>
                        <a class="dropdown-item" href="#">Pop</a>
                        <a class="dropdown-item" href="#">Hip-hop/Rap</a>
                        <a class="dropdown-item" href="#">Sertanejo</a>
                        <a class="dropdown-item" href="#">Pagode</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Escolhe todos</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquise" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquise</button>
            </form>
        </div>
    </nav>
    <br>
    <br>
    <h1 class="title">Contatos</h1>
    <br>
    <br>
    <p id="text-contato">
        Lorem ipsum, dolor sit amet consectetur.
        perspiciatis! Alias consequuntur, totam incidunt numquam,
        voluptatem qui dolor ab harum facere molestias veritatis, <br>
        fuga repellat est earum. Suscipit, accusantium!
    </p>
    <br>
    <br>
    <div class="container">
        <form id="formContato" autocomplete="on">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6">
                    <div class="input-group m-1">
                        <input type="text" name="email" value="" class="form-control" placeholder="Insira seu email"
                            required="required" />
                    </div>
                    <div class="error"></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input-group m-1">
                        <input type="text" name="celular" value="" class="form-control"
                            placeholder="Insira seu celular" />
                    </div>
                    <div class="error"></div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="input-group m-1">
                        <textarea rows="8" type="text" name="contate" value="" class="form-control"
                            placeholder="Entre em contato" required="required"></textarea>
                    </div>
                    <div class="error"></div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" id="enviar">Enviar</button>
            </div>
        </form>
    </div>
    <br>
    <br>
    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="../img/Logotipo Oficial.png">
            <h3>Music<span>Land</span></h3>

            <p class="footer-links">
                <a href="../index.php">Início</a>
                |
                <a href="../pages/quemsomos.php">Quem Somos</a>
                |
                <a href="#">Planos</a>
                |
                <a href="../pages/contato.php">Contato</a>
            </p>

            <p class="footer-company-name">© Musicland.com | Designed by Alef Santiago</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>866 - R. Cámbara Orli,
                        Jardim Miray, Itaquaquecetuba-sp</span>
                    08574-150</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+55 11-947889435</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="projetoindie2019@gmail.com">projetoindie2019@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Sobre a empresa</span>
                O Music Land é uma plataforma web de divulgação de artistas independente.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </footer>

</body>
<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="../node_modules/ladda/dist/ladda.min.js"></script>
<script type="text/javascript" src="../node_modules/ladda/dist/spin.min.js"></script>
<script type="text/javascript" src="../js/contato.js"></script>

</html>