<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
     	   	<meta charset="utf-8">
     	   	<title>Formulario Usuario</title>
     </head>
     	    <body>
     	    	<form action='index.php?controller=usuario&action=save' method='post'>
     	    		  <table>
                             <tr>
                              <td><input type="hidden" name="id" value="<?php echo $usuario->id;?>"></td>
                             </tr>
     	    		  	    <tr>
     	    		  	    	<td>Nombre</td>
     	    		  	    	<td><input type="text" name="nombre" value="<?php echo $usuario->nombre;?>"></td>
     	    		  	    </tr>
                             <tr>
                              <td>Apellido</td>
                              <td><input type="text" name="apellido" value="<?php echo $usuario->apellido;?>"></td>
                             </tr>
                             <tr>
                             <td>Genero</td>
                             <td>
                             <select name='sexo'>
<option <?php echo $usuario->nombre=='Mujer'?'Selected':'';?> value='Mujer'>Mujer</option>
<option <?php echo $usuario->nombre=='Hombre'?'Selected':'';?>   value='Hombre'>Hombre</option>
                              </select>
                              </td>
                              </tr>
                              <tr>
                              <td>Direccion</td>
                              <td><input type="text" name="direccion" value="<?php echo $usuario->direccion;?>"></td>
                             </tr>
                              <tr>
                              <td>Telefono</td>
                              <td><input type="number" name="telefono" value="<?php echo $usuario->telefono;?>"></td>
                             </tr>
                             <tr>
                              <td>Edad</td>
                              <td><input type="number" name="edad" value="<?php echo $usuario->edad;?>"></td>
                             </tr>
                             <tr>
                              <td><input type="submit" name="guardar" value="guardar"></td>
                             </tr> 
     	    		  </table>
     	    	</form>
     	    </body>
</html>