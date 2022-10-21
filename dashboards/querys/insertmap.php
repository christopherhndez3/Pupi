<?php
include('conn.php');
$con=conectar();
$idProducto=$_POST['idProducto'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudades'];
$precio=$_POST['precio'];
$lugar=$_POST['lugar'];
$caducacion=$_POST['caducidad'];
$pagoBaes=$_POST['baes'];
$discapacitados=$_POST['discapacitados'];
$enlace=$_POST['enlace'];
$tip=$_POST['tip'];

$sql="INSERT INTO produmap VALUES('$idProducto','$nombre','$direccion','$ciudad','$precio','$caducacion','$pagoBaes', '$lugar','$discapacitados', '$enlace', '$tip')";

$query= mysqli_query($con,$sql);
if($query){
    header('Location: ../dashboardAdmin.php');
}else{ 
    ?>
    <!DOCTYPE html>
    <html >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body >
        <div class="mx-auto" style= "width: 200px;">
    <?php
    echo" <p>Error</p>";
    echo" <p>Datos incorrectos</p>";
    echo"<br/><p><a href='../dashboards/dashboardAdmin.php' class='btn btn-outline-primary'>volver</a></p>";
    ?>
    
    </div>

    </body>
    </html><?php
}
?>