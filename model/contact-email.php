<?php

include("../controller/conexao.php");
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];

date_default_timezone_set('America/Sao_Paulo');

$data_envio = date("Y/m/d");
$hora_envio = date("H:i:s");

$query = mysqli_query($db_connect, "INSERT INTO contato (nome, email, mensagem, data_envio, hora_envio) VALUES ('$nome','$email','$mensagem','$data_envio', '$hora_envio')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:../view/contato.php?note=success");



