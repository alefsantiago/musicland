<?php
session_start();
$_SESSION['logado']=false; 
$_SESSION['id']=null;
header("Location: index.php");
echo"
<script>
    alert('Desconectado');
</script>";
?>