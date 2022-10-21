<?php
include('./php/conn.php');
$con=conectar();

$Nombre=$_POST['Nombre'];
$Correo=$_POST['Correo'];
$Tema=$_POST['Tema'];
$Mensaje=$_POST['Mensaje'];
$sql="INSERT INTO correo VALUES('$Nombre','$Correo','$Tema','$Mensaje')";

$query= mysqli_query($con,$sql);
if($query){
    
    ?>
    <!DOCTYPE html>
    <html >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gracias</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body >
        <div class="mx-auto" style= "width: 200px;">
    <?php
    echo" <p>GRACIAS</p>";
    echo" <p>TUS DATOS SE HAN ENVIADO DE FORMA CORRECTA, NOS PONDREMOS EN CONTACTO PRONTO</p>";
    echo"<br/><p><a href='index.html' class='btn btn-outline-primary'>volver</a></p>";
    ?>
    
    </div>

    </body>
    </html><?php

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
    echo" <p>Ha ocurrido un error, porfavor revise nuevamente los datos</p>";
    echo"<br/><p><a href='../dashboardAdmin.php' class='btn btn-outline-primary'>volver</a></p>";
    ?>
    
    </div>

    </body>
    </html><?php
}
?>
    