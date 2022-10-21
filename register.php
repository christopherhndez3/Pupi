<?php
$rut=$_POST['rut'];
$name=$_POST['name'];
$edad=$_POST['edad'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];
$grupo=$_POST['grupo'];

include('./php/conn.php');
$connect=conectar();

$query2=("SELECT * from users");
if ($result= mysqli_query($connect, $query2)) {
    $count=mysqli_num_rows($result);
}
$count=$count+300;
$query="INSERT INTO users VALUES ('$count','$name','$correo','$pass','$grupo','$edad','$rut','$direccion')";
$response=mysqli_query($connect,$query);
if($response){        
    Header("Location:login.html");
}else{ 
    ?>
        <!DOCTYPE html>
        <html>
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
        echo" <p> Datos incorrectos</p>";
        echo"<br/><p><a href='./login.html' class='btn btn-outline-primary'>volver</a></p>";
        ?>
        </div>
        </body>
        </html><?php
}
?>