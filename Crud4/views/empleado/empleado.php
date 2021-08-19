 <?php


?>
<!DOCTYPE html>
<html>
      <head>
     <title><?php echo $data["titulo"]; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js" ></script>
        </head>
        <body>
              <h2>Empleados</h2>
                <br />
                <br />
				<a href="index.php?c=empleados&a=nuevo" class="btn btn-primary">Agregar</a>
                <br />
                <br />
              <div class="table-responsive">
              <table border="1" width="80%" class="table">
                  <thead>
                      <tr class="table-primary">
					    <th>#</th>
                        <th>Cedula</th>
                        <th>Nombre_empleado</th>
                        <th>Apellido_empleado</th>
                        <th>Sexo_empleado</th>
                        <th>Direccion_empleado</th>
                        <th>Correo_empleado</th>
                        <th>area</th>
                        <th>rol</th>
						<th>Eliminar</th>
						<th>Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach($data["empleados"] as $dato){
                               echo "<tr>";
							    echo "<td>".$dato["empleado_rol_codigo"]."</td>";
                               echo "<td>".$dato["cedula"]."</td>";
                               echo "<td>".$dato["nombre_empleado"]."</td>";
                               echo "<td>".$dato["apellido_empleado"]."</td>";
                               echo "<td>".$dato["sexo_esmpleado"]."</td>";
                               echo "<td>".$dato["direccion_empleado"]."</td>";                             
                               echo "<td>".$dato["correo_empleado"]."</td>";
                               echo "<td>".$dato["area_nombre"]."</td>";
							   echo "<td>".$dato["rol_nombre"]."</td>";
							   echo "<td><a href='index.php?c=empleados&a=eliminar&id=".$dato["empleado_rol_codigo"]."'class='btn btn-danger'>Eliminar</a></td>";
							   echo "<td><a href='index.php?c=empleados&a=modificar&id=".$dato["empleado_rol_codigo"]."' class='btn btn-warning'>Modificar</a></td>";
                               echo "</tr>";
							   
                       }
                      ?>
                    </tbody>
              </table>
                  </div>
                      </div>
        </body>
</html>