<?php
require_once('../controller/conexao.php');
session_start();
$email = $_POST['email'];
$senha = ($_POST['senha']);
$tenta = 0;

if ($tenta == 0) {
  $query = "select idUsu,emailUsu from usuario where emailUsu = '{$email}' and senhaUsu = '{$senha}'";

  $verifica = mysqli_query($db_connect, $query);

  $teste1 = mysqli_fetch_array($verifica);

  $_SESSION['id'] = $teste1['idUsu'];

  if (mysqli_num_rows($verifica) > 0) {
    $tenta = 1;
    $_SESSION['usu'] ="U";
  }
} if ($tenta == 0) {
  $query = "select idArt,emailArt from artista where emailArt = '{$email}' and senhaArt = '{$senha}'";

  $verifica = mysqli_query($db_connect, $query);

  $teste2 = mysqli_fetch_array($verifica);

  $_SESSION['id'] = $teste2['idArt'];
  if (mysqli_num_rows($verifica) > 0) {
    $tenta = 1;
    $_SESSION['usu'] ="M";
  }
} if ($tenta == 0) {
  $query = "select idGrav,emailGrav from gravadora where emailGrav = '{$email}' and senhaGrav = '{$senha}'";

  $verifica = mysqli_query($db_connect, $query);

  $teste3 = mysqli_fetch_array($verifica);

  $_SESSION['id'] = $teste3['idGrav'];

  if (mysqli_num_rows($verifica) > 0) {
    $tenta = 1;
    $_SESSION['usu'] ="G";
  }
}

if (mysqli_num_rows($verifica) <= 0) {
  echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');
        window.location.href='../index.php';</script>";
        // var_dump($teste1);
        // var_dump($teste2);
        // var_dump($teste3);
} else { ?>
  <script>
    alert('Login Efetuado com Sucesso');
    location.href = '../feed.php';
    <?php $_SESSION['logado'] = true; ?>
  </script>
<?php
}
echo $_SESSION['usu'];

?>