<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music Land</title>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/quemsomos.css">
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
            <a href="./cadartistas.php"><button type="button" class="btn btn-outline-primary">Inscreva-se para
                Artistas</button></a>
          </div>
          <hr>
          <img class="users" src="../img/record.png">
          <p id="text-users">
            Lorem ipsum, dolor sit amet <br>
            Accusantium qui aut ipsa,laef <br>
            nulla ea natus autem.
          </p>
          <div class="btn-inscreva">
            <a href="./cadgravadoras.php"><button type="button" class="btn btn-outline-primary">Inscreva-se para
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
          <a class="nav-link active" href="../view/quemsomos.php">Quem Somos <span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Planos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/contato.php">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Divulgue</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
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

  <div class="bgimg-1">
    <div class="caption">
      <span class="border">Bem-Vindo</span>
    </div>
  </div>

  <div class="text-somos">
    <h3 class="text-center">Quem somos</h3>
    <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the
      foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere
      mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim.
      Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam
      vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales
      tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam
      sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit
      proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
  </div>

  <div class="bgimg-2">
    <div class="caption">
      <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">LESS HEIGHT</span>
    </div>
  </div>

  <div style="position:relative;">
    <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
      <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
    </div>
  </div>

  <div class="bgimg-3">
    <div class="caption">
      <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span>
    </div>
  </div>

  <div style="position:relative;">
    <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
      <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
    </div>
  </div>

  <div class="bgimg-1">
    <div class="caption">
      <span class="border">Music Land</span>
    </div>
  </div>

  <footer class="footer-distributed">

    <div class="footer-left">
      <img src="../img/Logotipo Oficial.png">
      <h3>Music<span>Land</span></h3>

      <p class="footer-links">
        <a href="../index.php">Início</a>
        |
        <a href="../view/quemsomos.php">Quem Somos</a>
        |
        <a href="#">Planos</a>
        |
        <a href="../view/contato.php">Contato</a>
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
<script type="text/javascript" src="../js/quemsomos.js"></script>
<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</html>