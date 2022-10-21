<?php
include("../php/conn.php");
$con = conectar();
session_start();


$sql = "SELECT * FROM productos";
$query = mysqli_query($con, $sql);

$ruts = "SELECT id FROM users";
$query2 = mysqli_query($con, $ruts);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/estilo.css" type="text/css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title> Dashboard Admin</title>
    
</head>
<a href="../dashboards/querys/dudasp.php"><button style="text-align:center" type="button" class="btn btn-danger"> Ver correos de dudas</button></a>
<body style>
    <?php
    echo "<h3>Bienvenido: admin</h3>";
    ?>

    <div class="container mt-4 mx-3 ">


        <div class="container">

            <div class="row">

                <form action="./querys/insertmap.php" method="POST">
                    
                    <div class="mb-3 col">
                        <label for="">Numero de Productos:</label>
                        <input type="text" name="idProducto" class="form-control" required><span class="bar--input "></span>
                    </div>

                    <div class="form-group">
                        <label for="">Nombre Producto:</label>
                        <input type="text" name="nombre" required><span class="bar--input "></span>
                    </div>

                    <div class="form-group">
                        <label for="">Lugar:</label>
                        <input type="text" name="lugar" required><span class="bar--input "></span>
                    </div>
                    <div class="form-group">
                        <label for="">Direccion:</label>
                        <input type="text" name="direccion" required><span class="bar--input"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Ciudad: </label>
                        <select class="control" name="ciudades">
                            <option disabled selected class="black">--Seleccione--</option>
                            <option class="black" value="temuco">Temuco</option>
                            <option class="black" value="nueva imperial">Nueva Imperial</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input type="text" name="precio" required><span class="bar--input"></span>
                    </div>
                    <div class="form-group">
                        <label for="">¿En cuanto caduca?</label>
                        <select class="control" name="caducidad">
                            <option selected class="black" value="Un dia">1 dia</option>
                            <option class="black" value="3 dias">3 dia</option>
                            <option class="black" value="5 dias">5 dia</option>
                            <option class="black" value="1 semana o mas">1 semana o mas</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">¿Se puede pagar con baes?</label>
                        <select class="control" name="baes">
                            <option disabled selected class="black">--Seleccione--</option>
                            <option class="black" value="si">Si</option>
                            <option class="black" value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿Tiene Acceso para discapacitados?</label>
                        <select class="control" name="discapacitados">
                            <option disabled selected class="black">--Seleccione--</option>
                            <option class="black" value="si">Si</option>
                            <option class="black" value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">link producto Producto:</label>
                        <input type="text" name="enlace" required><span class="bar--input "></span>
                    </div>
                    <div class="form-group">
                        <label for="">¿Es una oferta o es un contenedor?</label>
                        <select class="control" name="tip">
                            <option disabled selected class="black">--Seleccione--</option>
                            <option class="black" value="Oferta">Oferta</option>
                            <option class="black" value="Contenedor">Contenedor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿a?</label>
                        <select class="control" name="tip">
                            <option disabled selected class="black">--Seleccione--</option>
                            <option class="black" value="Oferta"><?php echo $row['ciudades'] ?></option>
                            
                        </select>
                    </div>
                    <br>
                    <!--
                    <div class="form-group">
                        <label for="img">Imagen referencial:</label>
                        <input type="file" name="img"><span class="bar--input"></span>
                    </div><br>
-->
                    <input type="submit" class="btn btn-primary">

                </form>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>Nombre producto</th>
                                <th>Direccion</th>
                                <th>Ciudades</th>
                                <th>Precio</th>
                                <th>Caducidad</th>
                                <th>Pago Baes</th>
                                <th>Acceso discapacitados</th>
                                <th>ID</th>
                                <th>Funcion</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['nombre'] ?></td>
                                    <td><?php echo $row['direccion'] ?></td>
                                    <td><?php echo $row['ciudades'] ?></td>
                                    <td><?php echo $row['precio'] ?></td>
                                    <td><?php echo $row['caducacion'] ?></td>
                                    <td><?php echo $row['pagoBaes'] ?></td>
                                    <td><?php echo $row['discapacitados'] ?></dt>
                                    <td><?php echo $row['idUser'] ?></td>
                                   <!-- <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>"></td> -->

                                    <th><a href="delete.php?idProducto=<?php echo $row['idProducto'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>