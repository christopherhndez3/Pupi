<?php
  include("../php/conn.php");
    $con=conectar();

    $nombre=$_GET['idProducto'];

    $sql="DELETE FROM productos WHERE idProducto='$nombre'";
    $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: ./dashboardAdmin.php");
        }else{
            print("ha ocurrido un error");
        }
?>
