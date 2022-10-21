<?php

include("conn.php");
$con=conectar();

$username=$_POST['username'];
$mail=$_POST['mail'];
$direccion=$_POST['direccion'];


$sql="UPDATE users SET mail='$mail', direccion='$direccion' WHERE username='$username'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../dashboardusuario.html");
    }
?>