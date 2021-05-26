<!DOCTYPE html>
<html>
      <head>
     <title><?php echo $data["titulo"]; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" href="../web/assets/css/bootstrap.min.css">
    <link href="../web/font-awesome/css/all.css" rel="stylesheet">
    <link href="../web/font-awesome/css/all.min.css" rel="stylesheet">
    <script src="../web/js/evitar.js"></script>

        </head>
        <body>
              <h2>Usuarios</h2>       
                <br />
                <br />
                <a href="index.php?c=usuarios&a=nuevo" class="btn btn-primary">Agregar</a>
                <input type="button" onclick="history.back()" name="volver atrás" class="btn btn-primary"  value="volver atrás">
                <br />
                <br />
              <div class="table-responsive">
              <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr class="table-primary">
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Sexo</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Edad</th>
                        <th>Correo</th>
                        <th>Celular</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach($data["usuarios"] as $dato){
                               echo "<tr>";
                               echo "<td>".$dato["cedula"]."</td>";
                               echo "<td>".$dato["nombre_usuario"]."</td>";
                               echo "<td>".$dato["apellido"]."</td>";
                               echo "<td>".$dato["sexo"]."</td>";
                               echo "<td>".$dato["direccion"]."</td>";
                               echo "<td>".$dato["telefono"]."</td>";
                               echo "<td>".$dato["edad"]."</td>";
                               echo "<td>".$dato["correo"]."</td>";
                               echo "<td>".$dato["celular"]."</td>";
                               echo "<td><a href='index.php?c=usuarios&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
                               echo "<td><a href='index.php?c=usuarios&a=eliminar&id=".$dato["id"]."'class='btn btn-danger'>Eliminar</a></td>";
                               echo "</tr>";
                       }
                      ?>
                    </tbody>
              </table>
                  </div>
                      </div>
        </body>
</html>