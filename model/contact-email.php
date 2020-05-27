<?php

include("../controller/conexao.php");
$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$mensagem=$_REQUEST['mensagem'];


$query=mysqli_query($db_connect,"INSERT INTO contato (nome, email, mensagem) VALUES ('$nome','$email','$mensagem')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:../view/contato.php?note=success");