<?php
include('conn.php');
$con = conectar();
$sql = "SELECT * FROM produmap WHERE ciudades='temuco'";
$query1 = mysqli_query($con, $sql);
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Lugares en  Temuco</title>

	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link rel="stylesheet" href="../dashboards/dash.css">
	<link rel="stylesheet" href="ciudades.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

	<style>
		.barra {
			justify-content: right;
			position: absolute;
			text-align: right;
			display: inline-flex;
			width: 35%;
			justify-content: right;
			margin: 0 3em 0 0;
			border-right: 1px solid #ffffff;
			padding: 0 3em 0 0;
		}

		.leaflet-container {
			height: 600px;
			width: 1400;
			display: flex;
			justify-content: flex-start;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-primary bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="../usuarios/usuarios/indexUser.html">Pupi</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="../usuarios/usuarios/indexUser.html">Inicio</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ciudades</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="./mapTco_1.php">Temuco</a></li>
							<li><a class="dropdown-item" href="./mapImp.php">Nueva Imperal</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row mb-2">
			<div class="col-sm-10 col-md-8 col-lg-8 col-xl-8">
				<div id='map' class="">
				</div>
			</div>
			<div class="col-sm-10 col-md-4 col-lg-4-col-xl-4">
				<!-- Lista de objetos para seleccionar-->
				<div class="row">
					<div class="col-auto">
						<div class="list-group" id="list-tab" role="tablist">
							<?php
							while ($row1 = mysqli_fetch_array($query1)) {
								$text = $row1['nombre'];
								$blank = " ";
								$replace = "";
								$nom = str_replace($blank, $replace, $text);
							?>
								<a class="list-group-item list-group-item-action" id="list-<?php echo $nom ?>-list" data-bs-toggle="list" href="#list-<?php echo $nom ?>" role="tab" aria-controls="list-<?php echo $nom ?>"><?php echo ucfirst($row1['nombre']) ?></a>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="col-5">
					<div class="tab-content" id="nav-tabContent">
						<?php
						while ($row = mysqli_fetch_array($query)) {
							$text = $row['nombre'];
							$blank = " ";
							$replace = "";
							$nom = str_replace($blank, $replace, $text);
						?>
							<div class="tab-pane fade" id="list-<?php echo $nom ?>" role="tabpanel" aria-labelledby="list-<?php echo $nom ?>-list">

								<div class="card">
									<div class="card-header">
										<p class="text-primary"><?php echo ucfirst($row['nombre']) ?> <span class="badge bg-primary rounded-pill">Cantidad: <?php echo $row['numero'] ?></span> <span class="badge bg-success rounded-pill">Precio c/u : <?php echo $row['precio'] ?></span> </p>

									</div>
									<div class="card-body">
									<h5 class="card-title"><?php echo $row['direccion'] ?> <?php echo ucfirst($row['ciudades']) ?></h5>
										<ul class="list-group list-group-flush">
										    <li class="list-group-item">Caduca en: <?php echo $row['caducidad'] ?></li>
											<li class="list-group-item">Aceptan pago Baes : <?php echo $row['baes'] ?></li>
											<li class="list-group-item">Acceso a discapacitados: <?php echo $row['lugar'] ?></li>
											<li class="list-group-item">Lugar: <?php echo $row['discapacitados'] ?></li>
											<li class="list-group-item">tipo: <?php echo $row['tip'] ?></li>
											<li class="list-group-item">enlace: <?php echo $row['enlace'] ?></li>
										</ul>
										<div class="card-footer">
										<a href="#" class="btn btn-primary">Volver arriba</a>
										</div>
										
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
	</script>
<script>
var locations = [
  ["Supermercado El trebol", -38.71065, -72.55933],
  ["Supermercado Santa Isabel", -38.73712, -72.59665],
  ["Unimarc AV San martin", -38.73909, -72.61146],
  ["Jumbo AV alemania", -38.73452, -72.61051],
  ["Supermercado AV Luis Durand", -38.72509, -72.62970],
  ["Lider Express ", -38.7183, -72.5657],
  ["Lider Walmart Prieto", -38.72894, -72.60039],
  ["Lider Vecino", -38.73489, -72.64164],
  ["Lider Express Amanecer", -38.72509, -72.62970],
  ["MiniMarket Oasis", -38.74888, -72.63636]
];
    var map = L.map('map').setView([-38.7266, -72.5817], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright%22%3EOpenStreetMap</a> contributors'
    }).addTo(map);

    for (var i = 0; i < locations.length; i++) {
  marker = new L.marker([locations[i][1], locations[i][2]])
    .bindPopup(locations[i][0])
    .addTo(map);

    }  

</script>



</body>
</html>
