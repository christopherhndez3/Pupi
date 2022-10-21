<?php
include('conn.php');
$con=conectar();


$sql = "SELECT * FROM correo";
$query = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard dudas</title>
    <div>
<a href="../dashboardAdmin.php"><button style="text-align:center" type="button" class="btn btn-danger"> Volver</button></a>
</div>
</head>
<body>
<div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>Nombre persona</th>
                                <th>Direccion correo</th>
                                <th>Tema Correo</th>
                                <th>Mensaje de correo</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['Nombre'] ?></td>
                                    <td><?php echo $row['Correo'] ?></td>
                                    <td><?php echo $row['Tema'] ?></td>
                                    <td><?php echo $row['Mensaje'] ?></td>
            
                                  
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</body>
</html>