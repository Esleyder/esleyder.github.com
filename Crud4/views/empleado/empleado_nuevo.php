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
			
			<form id="nuevo" name="nuevo" method="POST"  action="index.php?c=empleados&a=guarda" autocomplete="off">

				<div class="form-group">
					<label for="placa">Cedula</label>
					<input type="number" class="form-control" id="cedula" name="cedula"   />
				</div>
				
				<div class="form-group">
					<label for="marca">Nombre</label>
					<input type="text" class="form-control" id="nombre_empleado" name="nombre_empleado" />
				</div>
				
				<div class="form-group">
					<label for="modelo">Apellido</label>
					<input type="text" class="form-control" id="apellido_empleado" name="apellido_empleado" />
				</div>
				
 
				
 
				
				
								
				<div class="form-group">
					<label for="color">Direccion</label>
					<input type="text" class="form-control" id="direccion_empleado" name="direccion_empleado" />
				</div>

				<div class="form-group">
					<label for="color">Correo</label>
					<input type="email" class="form-control" id="correo_empleado" name="correo_empleado" />
				</div>
						
				<div class="form-group">
				    <select name="area_codigo" id="area_codigo">
                       <option value="0"  >Area</option>
                             <?php
                                $query = $mysqli -> query ("SELECT * FROM area");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option  value="'.$valores[area_codigo].'" >'.$valores[area_nombre].'</option>';
                                              }
											 
                               ?>
                    </select>
	            </div>
				
		        <div class="form-group">	
                              <?php	       
                                 $query = $mysqli -> query ("SELECT * FROM rol");
                                   while($row = mysqli_fetch_array($query)){
                                     $c = array($row["rol_codigo"]);
                                     $x = $row["rol_nombre"];
                                     if (in_array($x,$c))
                                         {
                                             echo "<input name='checkbox[]' type='checkbox' value='$row[rol_codigo]' checked='checked' />".$row["rol_nombre"]."<br />";
                                         } else { echo "<input name='checkbox[]' type='checkbox' value='$row[rol_codigo]' />".$row["rol_nombre"]."<br />"; }
                                         }
										 
										 
								   //implode(array $rol_codigo): string
								   
								   
										 
										
                                ?>
                </div>
				
				
 			
				
	 
				<div>
				<label for="louie">Mujer</label>
                <input type="radio" id="sexo_esmpleado" name="sexo_esmpleado" value="F">
                <label for="louie">Hombre</label>
				<input type="radio" id="sexo_esmpleado" name="sexo_esmpleado" value="M">              
                </div>
						
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>				
			</form>
 
		</div>
	</body>
</html>