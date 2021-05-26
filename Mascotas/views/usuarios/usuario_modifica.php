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
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=usuarios&a=actualizar" autocomplete="off">

                <di v class="form-group">					
					<input type="hidden" class="form-control" id="id" name="id" 
					value="<?php echo  $data["id"];?>"/>
				</div>


				<div class="form-group">
					<label for="placa">Cedula</label>
					<input type="text" class="form-control" id="cedula" name="cedula" 
					value="<?php echo $data["usuarios"]["cedula"]?>"/>
				</div>
				
				<div class="form-group">
					<label for="marca">Nombre</label>
					<input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" value="<?php echo $data["usuarios"]["nombre_usuario"]?>" />
				</div>
				
				<div class="form-group">
					<label for="modelo">Apellido</label>
					<input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $data["usuarios"]["apellido"]?>" />
				</div>
				
				<div class="form-group">
					<label for="anio">Sexo</label>
					<input type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $data["usuarios"]["sexo"]?>" />
				</div>
				
				<div class="form-group">
					<label for="color">Direccion</label>
					<input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $data["usuarios"]["direccion"]?>" />
				</div>

				<div class="form-group">
					<label for="color">Telefono</label>
					<input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $data["usuarios"]["telefono"]?>"/>
				</div>

				<div class="form-group">
					<label for="color">Edad</label>
					<input type="text" class="form-control" id="edad" name="edad" value="<?php echo $data["usuarios"]["edad"]?>" />
				</div>

				<div class="form-group">
					<label for="color">Correo</label>
					<input type="text" class="form-control" id="correo" name="correo" value="<?php echo $data["usuarios"]["correo"]?>" />
				</div>

				<div class="form-group">
					<label for="color">Contraseña</label>
					<input type="text" class="form-control" id="contraseña" name="contraseña" value="<?php echo $data["usuarios"]["contraseña"]?>"/>
				</div>

				<div class="form-group">
					<label for="color">Celular</label>
					<input type="text" class="form-control" id="celular" name="celular" value="<?php echo $data["usuarios"]["celular"]?>" />
				</div>
				<input type="button" onclick="history.back()" name="volver atrás" class="btn btn-primary"  value="volver atrás">				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>