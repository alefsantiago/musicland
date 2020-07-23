<?php
require_once("./controller/conexao.php");
require_once("./menu.php");
$query1 = "UPDATE artista SET planoArt= 1 WHERE idArt = $id";

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Land</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/Logotipo Oficial.png" type="image/x-icon">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="./js/scroll.js" type="text/javascript"></script>
</head>

<body>

    <h1 class="alinhamento-titulo" id="artista">Artistas em Destaque</h1>
    <br>

    <div class="container marketing">
        <div class="row">
            <?php
            $query2 = "SELECT idArt, nomeArt, fotoArt, descArt FROM artista ORDER BY planoArt DESC, idArt ASC LIMIT 4;";
            $listar2 = mysqli_query($db_connect, $query2);
            $row2 = mysqli_num_rows($listar2);
            if ($row2 >= 1) {
                while ($teste2 = mysqli_fetch_array($listar2)) {
                    echo "<div class='col-lg-3'>
                                <img class='rounded-circle' src='upload/" . $teste2['fotoArt'] . "' alt='imagem não encontrada' width='180' height='180' style='margin-left: 30px;'>
                                <h2 style='margin-left: 50px;'> " . $teste2['nomeArt'] . "</h2>
                                <p style='margin-left: 50px;'> " . mb_strimwidth($teste2['descArt'], 0, 42, "...") . "
                                </p>
                                <p style='margin-left: 50px;'><a class='btn btn-primary' href='#' role='button'>Venha Conhecer &raquo;</a></p>
                            </div>";
                    // var_dump($teste2);
                }
            }
            ?>



        </div>
    </div>

    <br>
    <hr>
    <h1 class="alinhamento-titulo" id="musica">Musicas em Destaque</h1>
    <br>
    <div class='container'>
        <div class='row'>
            <?php
            $query = "SELECT idMusica, nomeMusica, linkMusica, platMusica, m.idArt,idGen, a.nomeArt, a.idArt FROM musicas AS m INNER JOIN artista AS a ON m.idArt = a.idArt ORDER BY a.idArt;";
            // where idUsuario = $";
            $listar = mysqli_query($db_connect, $query);
            $row = mysqli_num_rows($listar);
            if ($row >= 1) {
                while ($teste = mysqli_fetch_array($listar)) {
                    echo "
               
                        <div class='col-md-4' style='margin-bottom:3%;'>
                            <fieldset>
                            <legend><h3>" . $teste['nomeMusica'] . " -</h3> <h2> " . $teste['nomeArt'] . "</h2></legend>
                            <div>
                            <iframe src='https://open.spotify.com/embed/track/" . $teste['linkMusica'] . "' width='300' height='380' frameborder='0' allowtransparency='true' allow='encrypted-media'></iframe>
                            </div>
                        </div>
                        </fieldset>";
                }
            }
            ?>
        </div>
    </div>
    <div class="modal fade" id="modalPlano" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Atualizar Plano</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <script src="https://www.paypal.com/sdk/js?client-id=ATBjl2GjzEga5lRdewLn26eMZD53fXY0_jjq0o3qyK1hVtAqg7pa_BJL-_rsV2BiiDhhWmdsRqb2SHfW">
                        // Required. Replace SB_CLIENT_ID with your sandbox client ID.
                    </script>

                    <div id="paypal-button-container"></div>

                    <script>
                        paypal.Buttons().render('body');
                    </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalMusica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar uma Musica</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="model/processaMusica.php" method="POST">
                        <div class="form-group">
                            <label for="nomeMusica">Nome da Musica</label>
                            <input type="text" class="form-control" id="nomeMusica" name="nomeMusica" placeholder="Ex: Tango">
                        </div>
                        <div class="form-group">
                            <label for="linkMusica">Link da musica</label>
                            <a id="myBtn"><i class="fa fa-question" aria-hidden="true"></i></a>
                            <input type="text" class="form-control" id="linkMusica" name="linkMusica" placeholder="Ex: https://open.spotify.com/track/URL-DA-MUSICA">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        </div>
                        <div class="form-group">
                            <label>Selecione o genero de sua Banda</label>
                            <?php
                            echo '<select class="form-control" name="genero">';
                            $query = "SELECT idGen,nomeGen FROM generos ORDER BY nomeGen ASC;";
                            $generos = mysqli_query($db_connect, $query);
                            echo "<option value='' disabled selected>Selecione o Genero</option>";
                            while ($lista = mysqli_fetch_array($generos)) {
                                echo "<option value='$lista[idGen]'>$lista[nomeGen]</option>";
                            }
                            echo "</select>";
                            ?>
                        </div>
                        <button type="submit" class="btn btn-primary" name="Musica">Entrar</button>
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Fechar</button>
                    </form>


                </div>
            </div>
        </div>
        <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
            <div class="toast" data-delay="30000" style="position: absolute; top: -205%; right: 0;">
                <div class="toast-header text-dark">
                    <img src="img/logo.png" class="rounded mr-2 h-25 w-25" alt="...">
                    <strong class="mr-auto">
                        <h2>MusicLand</h2>
                    </strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    <h5>Desculpe no momento só estamos trabalhando com o player do Spotify</h5>
                    <ul>
                        <li>Vá até seu Spotify</li>
                        <li>Escolha a musica que deseja compartilhar</li>
                        <li>Clique nos 3 pontos que ficam a direita do Titulo</li>
                        <li>Copiar link da Musica</li>
                        <li>Cole o link</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alterar Dados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                $select = "SELECT nomeArt,emailArt,fotoArt,descArt,a.idGen, g.idGen, nomeGen FROM artista AS a INNER JOIN generos AS g ON a.idGen = g.idGen WHERE idArt = $id;";
                $resultado = mysqli_query($db_connect, $select);
                $info = mysqli_fetch_array($resultado);
                ?>
                <div class="modal-body">
                    <form action="model/processaMusica.php" method="POST">
                        <div class="form-group">
                            <label for="nomeArt">Nome Artista/Banda</label>
                            <input type="text" class="form-control" id="nomeArt" name="nomeArt" value="<?php echo $info['nomeArt']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="emailArt">Email</label>
                            <input type="text" class="form-control" id="emailArt" name="emailArt" value="<?php echo $info['emailArt']; ?>">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nomeArt">Descrição</label><small class="float-right text-danger">Max. 1200</small>
                            <textarea class="form-control" name="descArt"><?php echo $info['descArt']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Selecione o genero de sua Banda</label>
                            <?php
                            echo '<select class="form-control" name="genero">';
                            $query = "SELECT idGen,nomeGen FROM generos ORDER BY nomeGen ASC;";
                            $generos = mysqli_query($db_connect, $query);
                            echo "<option value='." . $info['a.idGen'] . ".' selected>" . $info['nomeGen'] . "</option>";
                            while ($lista = mysqli_fetch_array($generos)) {
                                echo "<option value='$lista[idGen]'>$lista[nomeGen]</option>";
                            }
                            echo "</select>";
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="nomeArt">Nova Senha </label><small class="float-right text-danger">Não é necessario preencher</small>
                            <input type="password" class="form-control" name="nSenhaArt" id="password" placeholder="**********">
                        </div>
                        <div class="form-group">
                            <label for="nomeArt">Digite sua senha tual</label><small class="text-danger float-right">Obrigatório</small>
                            <input type="password" class="form-control" name="senhaArt" id="password" placeholder="**********" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="Update">Editar</button>
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<!--PAYPAL-->
<script src="https://www.paypal.com/sdk/js?client-id=ATBjl2GjzEga5lRdewLn26eMZD53fXY0_jjq0o3qyK1hVtAqg7pa_BJL-_rsV2BiiDhhWmdsRqb2SHfW">
    // Required. Replace SB_CLIENT_ID with your sandbox client ID.
</script>

<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '1.99'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
                alert('Transação Efutuada com sucesso ' + details.payer.name.given_name);
                <?php $atualiza = mysqli_query($db_connect, $query1); ?>
                location.href = 'feed.php';
            });
        }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
</script>


<script>
    $(document).ready(function() {
        $("#myBtn").click(function() {
            $('.toast').toast('show');
        });
    });
</script>

</html>