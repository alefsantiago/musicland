<?php 

$db_host="localhost:3308";
$db_username="root";
$db_password="";
$db_name="musicland";


$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (mysqli_connect_error())
{
    echo "Erroouuu: " . mysqli_connect_error();
}

?>