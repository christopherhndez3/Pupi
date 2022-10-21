<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="pupi";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);
    if ($con->connect_errno) {
        echo"error al conectar tipo : (". $con->connect_errno. " ) (". $con->connect_error;
    }
    return $con;
}
?>