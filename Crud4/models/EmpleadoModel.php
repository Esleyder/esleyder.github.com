<?php
	
	class Empleados_model{
		
		private $db;
		private $empleados;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->empleados = array();
		}
		
		public function get_empleados()
		{
			$sql1 ="select empleado_rol.empleado_rol_codigo,empleado.nombre_empleado,empleado.cedula,empleado.apellido_empleado,empleado.sexo_esmpleado,empleado.direccion_empleado,empleado.correo_empleado,rol.rol_nombre,area.area_nombre
from empleado,rol,empleado_rol,area
where empleado_rol.cedula=empleado.cedula and 
empleado_rol.rol_codigo=rol.rol_codigo
AND empleado_rol.area_codigo=area.area_codigo";

           

			$resultado1 = $this->db->query($sql1);
			while($row = $resultado1->fetch_assoc())
			{
				$this->empleados[] = $row;
			}
			return $this->empleados;
			
 
		}


       public function insertar($cedula,$nombre_empleado, $apellido_empleado, $sexo_esmpleado, $direccion_empleado,$correo_empleado){
			
		$resultado1 = $this->db->query("INSERT INTO empleado (cedula,nombre_empleado, apellido_empleado, sexo_esmpleado, direccion_empleado,correo_empleado) VALUES ($cedula,'$nombre_empleado', '$apellido_empleado', '$sexo_esmpleado', '$direccion_empleado','$correo_empleado')");
	             
		}
				
		public function insertar2($cedula,$rol_codigo,$area_codigo){
					 
        			 foreach($rol_codigo  as $rol_codigo){
        $resultado1 = $this->db->query("INSERT INTO empleado_rol (cedula,rol_codigo,area_codigo) VALUES ('$cedula','$rol_codigo','$area_codigo')");      
             }
        
		}
				

		public function modificar($cedula, $nombre_empleado, $apellido_empleado,$sexo_esmpleado, $direccion_empleado,$correo_empleado){
			
			$resultado1 = $this->db->query("UPDATE empleado SET  cedula='$cedula', nombre_empleado='$nombre_empleado', apellido_empleado='$apellido_empleado', sexo_esmpleado='$sexo_esmpleado',direccion_empleado='$direccion_empleado', correo_empleado='$correo_empleado'  WHERE cedula = '$cedula'");			
		}
		
	    public function modificar2($empleado_rol_codigo,$rol_codigo,$area_codigo ){
			
			$resultado1 = $this->db->query("UPDATE empleado_rol SET   empleado_rol_codigo='$empleado_rol_codigo',rol_codigo='$rol_codigo',area_codigo='$area_codigo'  WHERE empleado_rol_codigo = '$empleado_rol_codigo'");			
		}
					
		
		public function eliminar($empleado_rol_codigo){
			
			$resultado = $this->db->query("DELETE FROM empleado_rol WHERE empleado_rol_codigo = '$empleado_rol_codigo'");
			
		}
		
		public function get_empleado($empleado_rol_codigo)
		{
			
		$sql2 ="select empleado_rol.empleado_rol_codigo,empleado.nombre_empleado,empleado.cedula,empleado.apellido_empleado,empleado.sexo_esmpleado,empleado.direccion_empleado,empleado.correo_empleado,rol.rol_nombre,area.area_nombre,area.area_codigo,rol.rol_codigo
		from empleado,rol,empleado_rol,area
		where empleado_rol.cedula=empleado.cedula and
		empleado_rol.rol_codigo=rol.rol_codigo AND
		empleado_rol.area_codigo=area.area_codigo
		and empleado_rol_codigo='$empleado_rol_codigo' LIMIT 1 ";
							   
							   
            //$sql3 ="select * from empleado_rol
            //WHERE empleado_rol_codigo='$empleado_rol_codigo' LIMIT 1"; 
			$resultado = $this->db->query($sql2);
			$row = $resultado->fetch_assoc();

			return $row;
		}
}

?>

 