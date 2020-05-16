<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Music Land</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" href="img/Logotipo Oficial.png" type="image/x-icon">
</head>

<body>

  <div class="jumbotron">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
    <div class="btn-sign">
      <button type="button" class="btn btn-outline-primary" data-toggle="modal"
        data-target="#modalExemplo">Inscreva-se</button>
     <a href="pages/login.php"><button type="button" class="btn btn-outline-primary">Entrar</button></a> 
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
          <img class="users" src="img/user.png">
          <p id="text-users">
            Lorem ipsum, dolor sit amet <br>
            Accusantium qui aut ipsa,laef <br>
            nulla ea natus autem.
          </p>
          <div class="btn-inscreva">
           <a href="./pages/cadusers.php"><button type="button" class="btn btn-outline-primary">Inscreva-se para Fãs</button></a> 
          </div>
          <hr>
          <img class="users" src="img/artistas.png">
          <p id="text-users">
            Lorem ipsum, dolor sit amet <br>
            Accusantium qui aut ipsa,laef <br>
            nulla ea natus autem.
          </p>
          <div class="btn-inscreva">
           <a href="./pages/cadartistas.php"><button type="button" class="btn btn-outline-primary">Inscreva-se para Artistas</button></a> 
          </div>
          <hr>
          <img class="users" src="img/record.png">
          <p id="text-users">
            Lorem ipsum, dolor sit amet <br>
            Accusantium qui aut ipsa,laef <br>
            nulla ea natus autem.
          </p>
          <div class="btn-inscreva">
          <a href="./pages/cadgravadoras.php"><button type="button" class="btn btn-outline-primary">Inscreva-se para Gravadoras</button></a> 
          </div>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="#">Music Land</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/quemsomos.php">Quem Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Planos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/contato.php">Contato</a>
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

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Por que usar o music land ?</h5>
          <p>Somos uma plataforma muito diversificada e <br>
            encontrar uma grande variedade de artistas.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
  <br>
  <h1 class="alinhamento-titulo">Novidades</h1>
  <div class="barra"></div>
  <br>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Destaque</a>
          </h3>
          <div class="mb-1 text-muted">Jun 1</div>
          <p class="card-text mb-auto">Lançamento da primeira versão do website Music Land,
            venha conhecer as novidades que a plataforma traz.
          </p>
          <a href="#">Continue Lendo</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Lorem Ipsum</a>
          </h3>
          <div class="mb-1 text-muted">Jun 1</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
            additional content.</p>
          <a href="#">Continue reading</a>
        </div>
      </div>
    </div>
  </div>
  </div>


  <div class="row mb-2">
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Destaque</a>
          </h3>
          <div class="mb-1 text-muted">jun 1</div>
          <p class="card-text mb-auto">Lançamento da primeira versão do website Music Land,
            venha conhecer as novidades que a plataforma traz.
          </p>
          <a href="#">Continue Lendo</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Post title</a>
          </h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
            additional content.</p>
          <a href="#">Continue reading</a>
        </div>
      </div>
    </div>
  </div>
  </div>

  <br>
  <hr>
  <h1 class="alinhamento-titulo">Divulgue sua musica</h1>
  <lottie-player src="https://assets6.lottiefiles.com/temp/lf20_5c431k.json" background="transparent" speed="1"
    style="width: 600px; height: 650px; margin-top: -50px;" loop autoplay>
  </lottie-player>
  <div class="text-divulgue">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eaque minus,<br>
      voluptatum neque quos odio totam incidunt repellat atque dolore nesciunt,<br>
      omnis iure quasi, mollitia accusamus architecto tempora eos dorimeameno!<br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eaque minus,<br>
      voluptatum neque quos odio totam incidunt repellat atque dolore nesciunt,<br>
      omnis iure quasi, mollitia accusamus architecto tempora eos dorimeameno!<br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eaque minus,<br>
      voluptatum neque quos odio totam incidunt repellat atque dolore nesciunt,<br>
      omnis iure quasi, mollitia accusamus architecto tempora eos dorimeameno!<br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eaque minus,<br>
      voluptatum neque quos odio totam incidunt repellat atque dolore nesciunt,<br>
      omnis iure quasi, mollitia accusamus architecto tempora eos dorimeameno!<br>
      omnis iure quasi, mollitia accusamus architecto tempora eos dorimeameno!<br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eaque minus,<br>
      voluptatum neque quos odio totam incidunt repellat atque dolore nesciunt,<br>
      omnis iure quasi, mollitia accusamus architecto tempora eos dorimeameno!<br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eaque minus,<br>
      voluptatum neque quos odio totam incidunt repellat atque dolore nesciunt,<br>
      omnis iure quasi, mollitia accusamus architecto tempora eos dorimeameno!
    </p>
  </div>
  <br>
  <hr>
  <h1 class="alinhamento-titulo">Artistas Mais Pesquisados</h1>
  <br>

  <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" src="img/temposdemorte.jpg" alt="Generic placeholder image" width="140"
          height="140">
        <h2>Tempos de morte</h2>
        <p>Banda formada em 2014 de Postpunk/Punk/Noise, formada pela Alê, Bruno, Fejones e Zorel,
          São de Itapetinga interior de São Paulo.
        </p>
        <p><a class="btn btn-primary" href="#" role="button">Venha Conhecer &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img class="rounded-circle" src="img/ballet.png" alt="Generic placeholder image" width="140" height="140">
        <h2>Ballet Clandestino</h2>
        <p>Banda de Punk/ Post Punk formada pelo Vinicius Primo, Natan, Tiofrey,
          São do centro de São Paulo.
        </p>
        <p><a class="btn btn-primary" href="#" role="button">Venha Conhecer &raquo;</a></p>
      </div>
      <br>
      <div class="col-lg-4">
        <img class="rounded-circle" src="img/gangue.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Gangue Morcego</h2>
        <p>Banda formada em 2011 de Post-Punk/Deathrock, formada pela Alexandre Matos,
          Thiago Halleck, Daniel Sombrio, Daniel K. e Mario Mamede.
        </p>
        <p><a class="btn btn-primary" href="#" role="button">Venha Conhecer &raquo;</a></p>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <hr>
  <h1 class="alinhamento-titulo">Categoria</h1>
  <div class="row">
    <div class="column">
      <div class="associados">
        <img class="img-associados" src="img/dollar.png">
        <h3 id="cate-associados">Associados</h3>
        <p class="text-asso">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Nostrum non necessitatibus quos quia ipsam officia temporibus
          corporis minus dolores, quo in obcaecati architecto,
          possimus quaerat sit debitis impedit tempora cumque.
        </p>
      </div>
    </div>
    <div class="column">
      <div class="fans">
        <img class="img-fans" src="img/user.png">
        <h3 id="cate-fans">Fãs</h3>
        <p class="text-fans">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Nostrum non necessitatibus quos quia ipsam officia temporibus
          corporis minus dolores, quo in obcaecati architecto,
          possimus quaerat sit debitis impedit tempora cumque.
        </p>
      </div>
    </div>
    <div class="column">
      <div class="galeria">
        <img class="img-gale" src="img/galeria.png">
        <h3 id="cate-gale">Galeria</h3>
        <p class="text-galeria">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Nostrum non necessitatibus quos quia ipsam officia temporibus
          corporis minus dolores, quo in obcaecati architecto,
          possimus quaerat sit debitis impedit tempora cumque.
        </p>
      </div>
    </div>
  </div>
  <br>
  <br>
  <footer class="footer-distributed">

    <div class="footer-left">
      <img src="img/Logotipo Oficial.png">
      <h3>Music<span>Land</span></h3>

      <p class="footer-links">
        <a href="index.php">Início</a>
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


  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js">
</script>
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js">
</script>
<script type="text/javascript" src="js/main.js"></script>

</html>