<?php
$mail=$_POST['mail'];
$pass=$_POST['pass'];
session_start();

include('./php/conn.php');
$connect=conectar();
$query="SELECT*FROM users where mail='$mail' and password='$pass'";
$response=mysqli_query($connect,$query);
$filas=mysqli_num_rows($response);
if($filas){
    session_start();
    $getId=mysqli_query($connect,"SELECT (id) FROM users where mail='$mail' and password='$pass'");
    $_SESSION['usuario']=$getId;
    
    Header("Location:./usuarios/usuarios/indexUser.html");
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
        echo" <p>Datos incorrectos</p>";
        echo"<br/><p><a href='./login.html' class='btn btn-outline-primary'>volver</a></p>";
        ?>
        </div>
        </body>
        </html><?php
}
?>