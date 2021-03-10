<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
      <title>Index usuario</title>
 		<meta charset="utf-8">
 </head>
       	<body style="font-family:Helvetica, Arial, sans-serif;">
        <h1 style="display:inline-block;width:400px;font-weight:bold;">Lista de Usuarios</h1>
       		   <a href='index.php?controller=usuario&action=showById'>Nuevo Usuario</a>
       		  <table border="1px">
       		  	<tr>
       		  	<?php require_once 'core/constusuario.php';
                 foreach(DATA_USUARIO as $key=>$value):
                 ?>
                 <td><?php echo $value;?></td>
                 <?php endforeach; ?>
                 </tr>
                 <?php foreach($this->model->getAll() as $usuario): ?>
                 <tr>
                 	 <td><?php echo $usuario->nombre ?></td>
                 	 <td><?php echo $usuario->apellido ?></td>
                 	 <td><?php echo $usuario->sexo ?></td>
                 	 <td><?php echo $usuario->direccion ?></td>
                   <td><?php echo $usuario->telefono ?></td>
                 	 <td><?php echo $usuario->edad  ?></td>
<td><a  href="index.php?controller=usuario&action=showById&id=<?php echo $usuario->id; ?>">Editar</a></td>
<td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="index.php?controller=usuario&action=quit&id=<?php echo $usuario->id; ?>">Eliminar</a></td>
	                 </tr>
	                 <?php endforeach;?>
       		  </table>
       	</body>
 </html>