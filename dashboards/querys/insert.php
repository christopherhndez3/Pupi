<?php
include('conn.php');
$con=conectar();
$idUser=$_POST['idUser'];
$idProducto=$_POST['idProducto'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudades'];
$precio=$_POST['precio'];
$caducacion=$_POST['caducidad'];
$pagoBaes=$_POST['baes'];
$discapacitados=$_POST['discapacitados'];
//$imagen=$_FILES['img']['name'];
//$imagen_type=$_FILES['img']['type'];
//$imagen_size=$_FILES['img']['size'];

//$dirFile=$_SERVER['DOCUMENT_ROOT'].'/intranet/uploads';
//move_uploaded_file($_FILES['img']['tmp_name'],$dirFile . $imagen);
//$dirObjectivo=fopen($dirFile .  $imagen, "r");

//$content=fread($dirObjectivo, $imagen_size);
//$content=addslashes($content);
//fclose($dirObjectivo);
//$sql2=current($con->query("SELECT COUNT(id) from productos")->fetch());
//$result=mysql_fetch_array($sql2,0);
//$result=$sql2+505;
$sql="INSERT INTO productos VALUES('$idProducto','$nombre','$direccion','$ciudad','$precio','$caducacion','$pagoBaes','$discapacitados','NULL','$idUser')";

$query= mysqli_query($con,$sql);
if($query){
    header('Location: ../../usuarios/usuarios/indexUser.html');
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
    echo"<br/><p><a href='../usuarios/usuarios/indexUser.html' class='btn btn-outline-primary'>volver</a></p>";
    ?>
    
    </div>

    </body>
    </html><?php
}
?>