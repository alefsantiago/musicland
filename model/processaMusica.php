<?php
require_once("../controller/conexao.php");
require_once("../menu.php");
if (isset($_POST['Musica'])) {
    $nomeMus = $_POST['nomeMusica'];
    $linkMus = explode("/", $_POST['linkMusica']);
    $linkMus = $linkMus[4];
    $genMus = $_POST['genero'];
    $id = $_POST['id'];
    $query = "INSERT INTO musicas(nomeMusica,linkMusica,platMusica,idGen,idArt) VALUES ('$nomeMus','$linkMus',1,$genMus,$id)";
    $insere = mysqli_query($db_connect, $query);
    if ($insere == 1) {
?>
        <script>
            alert('Musica cadastrado com sucesso');
            location.href = '../feed.php';
        </script>
    <?php
    } else { ?>
        <script>
            alert('Erro no cadastro');
            location.href = '../feed.php';
        </script>
<?php
    }
}
if (isset($_POST['Update'])) {
    $nome = $_POST['nomeArt'];
    $email = $_POST['emailArt'];
    $senha = $_POST['senhaArt'];
    $novaSenha = $_POST['nSenhaArt'];
    $desc = $_POST['descArt'];
    $gen = $_POST['genero'];

    if (!empty($novaSenha)) {
        $att = "UPDATE artista SET nomeArt='$nome',emailArt='$email',senhaArt='$novaSenha' ,descArt='$desc',idGen='$gen' WHERE idArt = $id AND senhaArt = '$senha';";
        $atualizar = mysqli_query($db_connect, $att);
        if ($atualizar == 1) {
            echo "
                <script>
                    alert('Deu Bom');
                    location.href = '../feed.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('Erro ao Atualizar');
                    // location.href = '../feed.php';
                </script>";
        }
    } else {
        $att = "UPDATE artista SET nomeArt='$nome',emailArt='$email',senhaArt='$senha' ,descArt='$desc',idGen='$gen' WHERE idArt = $id AND senhaArt = '$senha';";
        $atualizar = mysqli_query($db_connect, $att);
        if ($atualizar == 1) {
            echo "
                <script>
                    alert('Deu Bom');
                    location.href = '../feed.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('Erro ao Atualizar');
                   // location.href = '../feed.php';
                </script>";
        }
    }
}


?>