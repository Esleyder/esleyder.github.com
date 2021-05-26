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
              <h2>Animales</h2>
                <br />
                <br />
                <a href="index.php?c=animales&a=nuevo" class="btn btn-primary">Agregar</a>
                <input type="button" onclick="history.back()" name="volver atrás" class="btn btn-primary"  value="volver atrás">
                <br />
                <br />
                <br />
              <div class="table-responsive">
              <table border="1" width="80%" class="table">
                  <thead>
                      <tr class="table-primary">
                        <th>Nombre</th>
                        <th>Especie</th>
                        <th>Rza</th>
                        <th>Genero</th>
                        <th>Color</th>
                        <th>Edad</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach($data["animales"] as $dato){
                               echo "<tr>";
                               echo "<td>".$dato["nombre"]."</td>";
                               echo "<td>".$dato["especie"]."</td>";
                               echo "<td>".$dato["raza"]."</td>";
                               echo "<td>".$dato["genero"]."</td>";
                               echo "<td>".$dato["color"]."</td>";
                               echo "<td>".$dato["edad"]."</td>";
                                echo "<td><a href='index.php?c=animales&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
                               echo "<td><a href='index.php?c=animales&a=eliminar&id=".$dato["id"]."'class='btn btn-danger'>Eliminar</a></td>";
                               echo "</tr>";
                       }
                      ?>
                    </tbody>
              </table>
                  </div>
                      </div>
        </body>
</html>