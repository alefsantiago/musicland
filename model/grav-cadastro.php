<?php
include("../controller/conexao.php");
$gravadora = $_POST['gravadora'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$senhaConfirma = MD5($_POST['confirmar senha']);

date_default_timezone_set('America/Sao_Paulo');

$data_envio = date("Y/m/d");
$hora_envio = date("H:i:s");

$query = mysqli_query($db_connect, "INSERT INTO cadastro_gravadoras (gravadora, cnpj, email, senha, confimar_senha, data_envio, hora_envio) VALUES ('$gravadora', '$cnpj', '$email','$senha', '$senhaConfirma','$data_envio', '$hora_envio')") or die(mysqli_error($db_connect));
$query_select = "SELECT email FROM cadastro_gravadoras WHERE email = '$email'";
$select = mysqli_query($query_select,$db_connect);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];

if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo do email deve ser preenchido');window.location.href='../view/cadgravadoras.php';</script>";
 
    }else{
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse email já existe');window.location.href='../view/cadgravadoras.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO cadastro_gravadoras (gravadora, cnpj, email, senha, confimar_senha, data_envio, hora_envio) VALUES ('$gravadora', '$cnpj', '$email','$senha', '$senhaConfirma','$data_envio', '$hora_envio')";
        $insert = mysqli_query($query,$db_connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='../view/login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='../view/cadgravadoras.php'</script>";
        }
      }
    }

    mysqli_close($db_connect);
    header("location:../view/cadgravadoras.php?note=success");
    
?>