<?php
session_start();

include("../controller/conexao.php");

if (isset($_POST['U'])) {

    $foto = $_FILES['fotoUsu'];
    $nome = $_POST['nomeUsu'];
    $email = $_POST['emailUsu'];
    $senha = $_POST['senhaUsu'];
    $desc = $_POST['descUsu'];
    $confSenha = $_POST['confSenha'];

    if (is_numeric($nome)) {
        echo "<script>
        alert('Coloque apenas Letras no Seu Nome');
      location.href = '../cadusers.php';
      </script>";
    }



    if (empty($nome) || empty($email) || empty($senha) || empty($desc) || empty($foto)) { ?>
        <script>
            alert('Algum dos campos está vazio. Preenchá - o');
            location.href = '../cadusers.php';
        </script>
        <?php
    } else {

        $query = "SELECT emailUsu FROM usuario,gravadora,artista WHERE emailUsu = '$email' OR emailArt='$email' OR emailGrav='$email'";
        $resulta = mysqli_query($db_connect, $query);
        if (mysqli_num_rows($resulta) >= 1) { ?>
            <script>
                alert('Já possui um usuário cadastrado com esse email, favor escolher outro');
                location.href = '../cadusers.php';
            </script>
            <?php
        } else {
            if (!preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $foto["name"], $ext)) { ?>
                <script>
                    alert('Ops! O arquivo selecionado não é uma imagem');
                    location.href = '../cadusers.php'
                </script>
                <?php
            } else {
                if ($confSenha != $senha) { ?>
                    <script>
                        alert('Ops! As Senhas não correspondem digite novamente!');
                        location.href = '../cadusers';
                    </script>

                    <?php } else {
                    preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $foto["name"], $ext);

                    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

                    $caminho = "../upload/" . $nome_imagem;



                    $query = "INSERT INTO usuario 
                        (nomeUsu, emailUsu, senhaUsu, fotoUsu, descUsu) VALUES 
                        ('$nome', '$email', '$senha', '$nome_imagem','$desc')";
                    $insere = mysqli_query($db_connect, $query);
                    if ($insere == 1) {
                        move_uploaded_file($foto["tmp_name"], $caminho);
                    ?>
                        <script>
                            alert('Usuário cadastrado com sucesso');
                            location.href = '../index.php';
                        </script>
                    <?php
                    } else { ?>
                        <script>
                            alert('Erro no cadastro');
                            location.href = '../cadusers.php';
                        </script>
        <?php
                    }
                }
            }
        }
    }
} elseif (isset($_POST['M'])) {

    $foto = $_FILES['fotoUsu'];
    $nome = $_POST['nomeUsu'];
    $email = $_POST['emailUsu'];
    $senha = $_POST['senhaUsu'];
    $desc = $_POST['descUsu'];
    $confSenha = $_POST['confSenha'];
    $genero = $_POST['generoBand'];

    if (empty($nome) || empty($email) || empty($senha) || empty($desc) || empty($foto) || empty($genero)) { ?>
        <script>
            alert('Algum dos campos está vazio. Preenchá - o');
            location.href = '../cadartistas.php';
        </script>
        <?php
    } else {

        $query = "SELECT emailArt FROM artista,gravadora,usuario WHERE emailArt = '$email' OR emailGrav = '$email' OR emailUsu = '$email'";
        $resulta = mysqli_query($db_connect, $query);
        if (mysqli_num_rows($resulta) >= 1) { ?>
            <script>
                alert('Já possui um usuário cadastrado com esse email, favor escolher outro');
                location.href = '../cadartistas.php';
            </script>
            <?php
        } else {
            if (!preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $foto["name"], $ext)) { ?>
                <script>
                    alert('Ops! O arquivo selecionado não é uma imagem');
                    location.href = '../cadartistas.php'
                </script>
                <?php
            } else {
                if ($confSenha != $senha) { ?>
                    <script>
                        alert('Ops! As Senhas não correspondem digite novamente!');
                        location.href = '../cadartistas.php';
                    </script>

                    <?php } else {
                    preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $foto["name"], $ext);

                    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

                    $caminho = "../upload/" . $nome_imagem;



                    $query = "INSERT INTO artista 
                            (nomeArt, emailArt, senhaArt, fotoArt, descArt,idGen) VALUES 
                            ('$nome', '$email', '$senha', '$nome_imagem','$desc','$genero')";
                    $insere = mysqli_query($db_connect, $query);
                    if ($insere == 1) {
                        move_uploaded_file($foto["tmp_name"], $caminho);
                    ?>
                        <script>
                            alert('Usuário cadastrado com sucesso');
                            location.href = '../index.php';
                        </script>
                    <?php
                    } else { ?>
                        <script>
                            alert('Erro no cadastro');
                            location.href = '../cadartistas.php';
                        </script>
        <?php
                    }
                }
            }
        }
    }
} elseif (isset($_POST['G'])) {

    $foto = $_FILES['fotoGrav'];
    $nome = $_POST['nomeGrav'];
    $email = $_POST['emailGrav'];
    $senha = $_POST['senhaGrav'];
    $desc = $_POST['descGrav'];
    $confSenha = $_POST['confSenha'];
    $cnpj = $_POST['cnpj'];


    if (!is_numeric($cnpj)) {
        echo "<script>
        alert('Não coloque Letras no Seu CNPJ');
      location.href = '../cadgravadoras.php';
      </script>";
    }



    if (empty($nome) || empty($email) || empty($senha) || empty($cnpj) || empty($foto) || empty($desc)) { ?>
        <script>
            alert('Algum dos campos está vazio. Preenchá - o');
            location.href = '../cadgravadoras.php';
        </script>
        <?php
    } else {

        $query = "SELECT emailGrav FROM gravadora,usuario,artista WHERE emailGrav = '$email' OR emailArt = '$email' OR emailUsu = '$email'";
        $resulta = mysqli_query($db_connect, $query);
        if (mysqli_num_rows($resulta) >= 1) { ?>
            <script>
                alert('Esse endereço de email ja foi cadastrado anteriormente, favor coloque outro');
                location.href = '../cadgravadoras.php';
            </script>
            <?php
        } else {
            if (!preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $foto["name"], $ext)) { ?>
                <script>
                    alert('Ops! O arquivo selecionado não é uma imagem');
                    location.href = '../cadgravadoras.php'
                </script>
                <?php
            } else {
                if ($confSenha != $senha) { ?>
                    <script>
                        alert('Ops! As Senhas não correspondem digite novamente!');
                        location.href = '../cadgravadoras.php';
                    </script>

                    <?php } else {
                    preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $foto["name"], $ext);

                    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

                    $caminho = "../upload/" . $nome_imagem;



                    $query = "INSERT INTO gravadora 
                                (nomeGrav, emailGrav, senhaGrav, fotoGrav, descGrav,cnpjGrav) VALUES 
                                ('$nome', '$email', '$senha', '$nome_imagem','$desc','$cnpj')";
                    $insere = mysqli_query($db_connect, $query);
                    if ($insere == 1) {
                        move_uploaded_file($foto["tmp_name"], $caminho);
                    ?>
                        <script>
                            alert('Usuário cadastrado coam sucesso');
                            location.href = '../index.php';
                        </script>
                    <?php
                    } else { ?>
                        <script>
                            alert('Erro no cadastro');
                            location.href = '../cadgravadoras.php';
                        </script>
<?php
                    }
                }
            }
        }
    }
}
