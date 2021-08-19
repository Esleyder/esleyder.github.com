<?php
// Realizamos la conexión con el servidor
   
  $mysqli = new mysqli("localhost", "root", "", "nexura");
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=empleados&a=actualizar" autocomplete="off">
 
                <div class="form-group">
					<label for="placa">Numero de registro</label>
					<input type="text" class="form-control" id="empleado_rol_codigo" name="empleado_rol_codigo" 
					value="<?php echo $data["empleados"]["empleado_rol_codigo"]?>"/>
				</div>
 


				<div class="form-group">
					<label for="placa">Cedula</label>
					<input type="text" class="form-control" id="cedula" name="cedula" 
					value="<?php echo $data["empleados"]["cedula"]?>"/>
				</div>
				
			    <div class="form-group">
					<label for="color">Nombre</label>
					<input type="text" class="form-control" id="nombre_empleado" name="nombre_empleado" value="<?php echo $data["empleados"]["nombre_empleado"]?>" />
				</div>
				
				
				
			    <div class="form-group">
					<label for="color">Apellido</label>
					<input type="text" class="form-control" id="apellido_empleado" name="apellido_empleado" value="<?php echo $data["empleados"]["apellido_empleado"]?>" />
				</div>
				
				<div class="form-group">
					<label for="color">Direccion</label>
					<input type="text" class="form-control" id="direccion_empleado" name="direccion_empleado" value="<?php echo $data["empleados"]["direccion_empleado"]?>" />
				</div>
				
				<div class="form-group">
					<label for="color">Correo</label>
					<input type="text" class="form-control" id="rol_codigo" name="correo_empleado" value="<?php echo $data["empleados"]["correo_empleado"]?>" />
				</div>
								
				
				<div class="form-group">
					<label for="color">Sexo</label>
					<input type="text" class="form-control" id="sexo_esmpleado" name="sexo_esmpleado" value="<?php echo $data["empleados"]["sexo_esmpleado"]?>" />
				</div>
				
 
				
				<div class="form-group">
					<label for="color">Rol_codigo</label>
					<input type="text" class="form-control" id="rol_codigo" name="rol_codigo" value="<?php echo $data["empleados"]["rol_codigo"]?>" />
				</div>
				
				
 
				
	 
				
				<div class="form-group">
				    <select name="area_codigo" id="area_codigo">
                       <option value="0"  ><?php echo $data["empleados"]["area_nombre"]?></option>
                             <?php
                                $query = $mysqli -> query ("SELECT * FROM area");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option  value="'.$valores[area_codigo].'" >'.$valores[area_nombre].'</option>';
                                              }
											 
                               ?>
                    </select>
	            </div>
	
								
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>			
			</form>
		</div>
	</body>
</html>