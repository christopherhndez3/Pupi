<?php
include("conn.php");
$con=conectar();
session_start();
$mail=$_SESSION['usuario'];
$sql="SELECT * FROM users WHERE mail='$mail'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="estilo.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="actualizarusu.php" method="post">
           
            <input type="text" class="form-control mb-3" name="username" value="<?php echo $row['username'] ?>" readonly>
            <input type="text" class="form-control mb-3" name="mail" placeholder="<?php echo $row['mail'] ?>" >
            <input type="text" class="form-control mb-3" name="direccion" placeholder="<?php echo $row['direccion'] ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
    </div>    
    
</body>
</html>