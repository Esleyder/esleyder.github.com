<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
     	   	<meta charset="utf-8">
     	   	<title>Formulario</title>
     </head>
     	    <body>
     	    	<form action='index.php?controller=animal&action=save' method='post'>
     	    		  <table>
                             <tr>
                              <td><input type="hidden" name="id" value="<?php echo $animal->id;?>"></td>
                             </tr>
     	    		  	    <tr>
     	    		  	    	<td>Nombre</td>
     	    		  	    	<td><input type="text" name="nombre" value="<?php echo $animal->nombre;?>"></td>
     	    		  	    </tr>
                             <tr>
                              <td>Especie</td>
                              <td><input type="text" name="especie" value="<?php echo $animal->especie;?>"></td>
                             </tr>
                              <tr>
                              <td>Raza</td>
                              <td><input type="text" name="raza" value="<?php echo $animal->raza;?>"></td>
                             </tr>
                             <tr>
                             <td>Genero</td>
                             <td>
                             <select name='genero'>
<option <?php echo $animal->nombre=='Macho'?'Selected':'';?> value='Macho'>Macho</option>
<option <?php echo $animal->nombre=='Hembra'?'Selected':'';?>   value='hembra'>Hembra</option>
                              </select>
                              </td>
                              </tr>
                              <tr>
                              <td>Color</td>
                              <td><input type="text" name="color" value="<?php echo $animal->color;?>"></td>
                             </tr>
                             <tr>
                              <td>Edad</td>
                              <td><input type="number" name="edad" value="<?php echo $animal->edad;?>"></td>
                             </tr>
                             <tr>
                              
                              <td><input type="submit" name="guardar" value="guardar"></td>
                             </tr> 
     	    		  </table>
     	    	</form>
     	    </body>
</html>