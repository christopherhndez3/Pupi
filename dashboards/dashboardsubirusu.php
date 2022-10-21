<?php
session_start();

$idUsu=$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Subir formulario</title>
    <link id="estilos" rel='stylesheet' type='text/css' href='../Styles/import.css'>
    <link id="estilos" rel='stylesheet' type='text/css' href='css/import.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
</head>
<body>
    
  <main>

    <form action="./querys/insert.php" class="form" method="POST">
        <div class="card">
            <div class="card__titulo">
                <a href="#"><h1 class="texto__titulo">Subir Peticion</h1></a>
            </div>
           
             <div class="card__group--input">
                <label for="">Tu id</label>
                <input type="text" name="idUser" id="idUser" required><span class="bar--input"></span>
            </div>

            
            <div class="card__group--input">
                <label for="">Id del Producto</label>
                <input type="text" name="idProducto" id="idProducto" required><span class="bar--input"></span>
            </div>

            <div class="card__group--input ">
                <label for="">Nombre Producto</label>
                <input type="text" name="nombre" id="nombre" required><span class="bar--input"></span>
            </div>
            
            <div class="card__group--input">
                <label for="">Direccion:</label>
                <input type="text" name="direccion" required><span class="bar--input"></span>
            </div>
            <div class="card__group--input">
                <label for="">Ciudad: </label>
                <select class="control" name="ciudades">
                    <option disabled selected class="black">--Seleccione--</option>
                    <option class="black" value="temuco">Temuco</option>
                    <option class="black" value="nueva imperial">Nueva Imperial</option>
                </select>
            </div>
            <div class="card__group--input">
                <label for="">Precio:</label>
                <input type="text" name="precio"  required><span class="bar--input"></span>
            </div>
            <div class="card__group--input">
                <label for="">¿En cuanto caduca?</label>
                <select class="control" name="caducidad">
                   <option selected class="black" value="Un dia">1 dia</option>
                    <option class="black" value="3 dias">3 dia</option>
                    <option class="black" value="5 dias">5 dia</option>
                    <option class="black" value="1 semana o mas">1 semana o mas</option>
                </select>
            </div>

            <div class="card__group--input">
                <label for="">¿Se puede pagar con baes?</label>
                <select class="control" name="baes">
                    <option disabled selected class="black">--Seleccione--</option>
                    <option class="black" value="si">Si</option>
                    <option class="black" value="no">No</option>
                </select>
            </div>
            <div class="card__group--input">
                <label for="">¿Tiene Acceso para discapacitados?</label>
                <select class="control" name="discapacitados">
                    <option disabled selected class="black">--Seleccione--</option>
                    <option class="black" value="si">Si</option>
                    <option class="black" value="no">No</option>
                </select>
            </div>
            <br>
            <!--
            <div class="card__group--input">
                <label for="img">Imagen referencial:</label>
                <input type="file" name="img" ><span class="bar--input"></span>
            </div>
-->
            <div class="buttons">
                <button type="submit" class="button button--sig"><span>Enviar Mi Peticion</span></button>
            </div>
        </div>
    </form>
</main>
      

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>

</html>     