<!DOCTYPE html>
<html lang="en">
<!-- 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Music Land</title>
    <link rel="stylesheet" href="../css/plano.css">
    <link rel="stylesheet" href="../node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="../node_modules/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head> -->

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">Music Land</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link scroll text-white" href="#">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll text-white" href="#artista">Artistas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll text-white" href="#musica">Musicas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gênero
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        $query = "SELECT idGen,nomeGen FROM generos WHERE NOT idGen = 1 ORDER BY nomeGen ASC";
                        $generos = mysqli_query($db_connect, $query);
                        while ($lista = mysqli_fetch_array($generos)) {
                            echo "<a class='dropdown-item' href='#'>" . $lista['nomeGen'] . "</a>";
                        }
                        ?>
                </li>
            </ul>
            <div>
                <?php
                session_start();

                if ($_SESSION['logado'] == false) :
                    header("Location: burlo.php");
                    echo "<script>alert('deu Ruim')</script>";
                endif;
                $id = $_SESSION['id'];

                if ($_SESSION['usu'] == "U") {
                    $query = "SELECT nomeUsu, fotoUsu FROM usuario WHERE idUsu = " . $id;
                    $resultado = mysqli_query($db_connect, $query);
                    $info = mysqli_fetch_array($resultado);
                }
                if ($_SESSION['usu'] == "M") {
                    $query = "SELECT nomeArt, fotoArt FROM artista WHERE idArt = " . $id;
                    $resultado = mysqli_query($db_connect, $query);
                    $info = mysqli_fetch_array($resultado);
                }
                if ($_SESSION['usu'] == "G") {
                    $query = "SELECT nomeGrav, fotoGrav FROM gravadora WHERE idGrav = " . $id;
                    $resultado = mysqli_query($db_connect, $query);
                    $info = mysqli_fetch_array($resultado);
                }
                // $resultado = mysqli_query($db_connect, $query);
                // $info = mysqli_fetch_array($resultado);
                // $nome = $info['nomeUsu'];
                // print_r($nome);

                ?>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Olá, <?php echo $info[0]; ?> <img class="rounded-circle" src="upload/<?php echo $info[1]; ?>" width="30" height="30" alt="" loading="lazy"> </a>
                    <div class="dropdown-menu">
                        <?php
                        if ($_SESSION['usu'] == "U") {
                            echo "<a class='dropdown-item' href='#'>Favoritos</a><div class='dropdown-divider'></div>";
                            echo "<a class='dropdown-item' href='#'>Meus Dados</a><div class='dropdown-divider'></div>";
                            echo "<a class='dropdown-item' href='./desconecta.php'>Sair</a>";
                        } else {
                            echo "<a class='dropdown-item' href='#'>Minha Pagina</a>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' href='#' data-toggle='modal' data-target='#modalMusica'>Adicionar Musica</a>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' href='#' data-toggle='modal' data-target='#modalPlano'>Atualizar Plano</a>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' href='#' data-toggle='modal' data-target='#modalDados'>Meus Dados</a>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' href='./desconecta.php'>Sair</a>";
                        }

                        ?>
                    </div>
                </div>
            </div>


        </div>
    </nav>
</body>
<!-- 
<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script> -->

</html>