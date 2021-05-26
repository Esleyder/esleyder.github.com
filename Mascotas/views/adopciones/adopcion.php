<!DOCTYPE html>
<html>
      <head>
     <title><?php echo $data["titulo"]; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" href="../web/assets/css/bootstrap.min.css">
     <link href="../web/font-awesome/css/all.css" rel="stylesheet">
    <link href="../web/font-awesome/css/all.min.css" rel="stylesheet">
    <script src="../web/assets/js/bootstrap.min.js" ></script>
        </head>
        <body>
              <h2>Adopcion</h2>
                <br />
                <br />
                <a href="index.php?c=adopciones&a=nuevo" class="btn btn-primary">Agregar</a>
                                <input type="button" onclick="history.back()" name="volver atrás" class="btn btn-primary"  value="volver atrás">
                <br />
                <br />
              <div class="table-responsive">
              <table border="1" width="80%" class="table">
                  <thead>
                      <tr class="table-primary">
                        <th>Nombre_Usuario</th>
                        <th>Cedula</th>
                        <th>correo</th>
                        <th>Nombre_animal</th>
                        <th>Fecha_adopcion</th>
                        <th>razon</th>
                        <th>celular</th>
                        <th>telefono</th>
                        <th>Eliminar</th>
                        <th>Editar</th>

                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach($data["adopciones"] as $dato){
                               echo "<tr>";
                               echo "<td>".$dato["nombre_usuario"]."</td>";
                               echo "<td>".$dato["cedula"]."</td>";
                               echo "<td>".$dato["correo"]."</td>";
                               echo "<td>".$dato["nombre"]."</td>";
                               echo "<td>".$dato["fecha_adpcion"]."</td>";
                               echo "<td>".$dato["razon"]."</td>";
                               echo "<td>".$dato["celular"]."</td>";
                               echo "<td>".$dato["telefono"]."</td>";
                               echo "<td><a href='index.php?c=adopciones&a=eliminar&id=".$dato["id"]."'class='btn btn-danger'>Eliminar</a></td>";
                               echo "<td><a href='index.php?c=adopciones&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
                               echo "</tr>";
                              
                       }
                      ?>
                    </tbody>
              </table>
                  </div>
                      </div>
        </body>
</html>