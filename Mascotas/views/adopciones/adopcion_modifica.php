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
			
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=adopciones&a=actualizar" autocomplete="off">

                 <di v class="form-group">          
          <input type="hidden" class="form-control" id="id" name="id" 
          value="<?php echo  $data["id"];?>"/>
        </div>




        <div class="form-group">
					<label for="modelo">Fecha_Adopcion</label>
					<input type="date" class="form-control" id="fecha_adpcion" name="fecha_adpcion" value="<?php echo $data["adopciones"]["fecha_adpcion"]?>"  />
				</div>
				
				<div class="form-group">
					<label for="anio">Razon_Adopcion</label>
					<input type="text" class="form-control" id="razon" name="razon"  value="<?php echo $data["adopciones"]["razon"]?>" />
				</div>

				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>


				<input type="button" onclick="history.back()" name="volver atrás" class="btn btn-primary"  value="volver atrás">
			</form>
		</div>
	</body>
</html>