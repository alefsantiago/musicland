<?php 
include('../controller/conexao.php');
$email = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
  if (isset($entrar)) {
           
    $verifica = $query("SELECT * FROM cadastro_artistas WHERE email = 
    '$email' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='../view/login.php';</script>";
        die();
      }else{
        setcookie("email",$email);
        header("Location:../index.php");
      }
  }
?>