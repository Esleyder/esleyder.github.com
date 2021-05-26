<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="../web/assets/css/bootstrap.min.css">
		<script src="../web/assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=animales&a=guarda" autocomplete="off">



				<div class="form-group">
					<label for="placa">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" />
				</div>
				
				<div class="form-group">
					<label for="marca">Especie</label>
					<input type="text" class="form-control" id="especie" name="especie" />
				</div>
				
				<div class="form-group">
					<label for="modelo">Raza</label>
					<input type="text" class="form-control" id="raza" name="raza" />
				</div>
				
				<div class="form-group">
					<label for="anio">Genero</label>
					<input type="text" class="form-control" id="genero" name="genero" />
				</div>

				<div class="form-group">
					<label for="color">Color</label>
					<input type="text" class="form-control" id="color" name="color" />
				</div>

				<div class="form-group">
					<label for="color">Edad</label>
					<input type="text" class="form-control" id="edad" name="edad" />
				</div>
			
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>


				<input type="button" onclick="history.back()" name="volver atrás" class="btn btn-primary"  value="volver atrás">
			</form>
		</div>
	</body>
</html>