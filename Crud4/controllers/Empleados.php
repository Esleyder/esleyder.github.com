 <?php
	
	class EmpleadosController {
		
		public function __construct(){
			require_once "models/EmpleadoModel.php";
		}
		
		public function index(){
			
			
			$empleados = new Empleados_model();
			$data["titulo"] = "Empleados";
			$data["empleados"] = $empleados->get_empleados();
			
			require_once "views/empleado/empleado.php";	
		}

		public function nuevo(){
			
			$data["titulo"] = "Empleados";
			require_once "views/empleado/empleado_nuevo.php";
		}
		
		public function guarda(){
		     echo $cedula = $_POST['cedula'];
			 echo $nombre_empleado = $_POST['nombre_empleado'];
			 echo $apellido_empleado = $_POST['apellido_empleado'];
			 echo $sexo_esmpleado = $_POST['sexo_esmpleado'];
			 echo $direccion_empleado = $_POST['direccion_empleado'];			
			 echo $correo_empleado = $_POST['correo_empleado'];
             echo $area_codigo = $_POST['area_codigo'];	
             			 
			 $rol_codigo=$_POST['checkbox'];
			 
			 //foreach($rol_codigo  as $rol_codigo){
              
             //}/
			    var_dump($rol_codigo);
			$empleados = new Empleados_model();
          
			$empleados->insertar($cedula,$nombre_empleado, $apellido_empleado, $sexo_esmpleado, $direccion_empleado,$correo_empleado);
			$empleados->insertar2($cedula,$rol_codigo,$area_codigo);
			$data["titulo"] = "Empleados";
			$this->index();
			 //header('Location: http://tuweb.com/pagina.html');
		}
		
		
		public function modificar($empleado_rol_codigo){
			
			$empleados = new Empleados_Model();
			
			$data["empleado_rol_codigo"] = $empleado_rol_codigo;
			$data["empleados"] = $empleados->get_empleado($empleado_rol_codigo);
			$data["titulo"] = "Empleados";
			require_once "views/empleado/empleado_modifica.php";
		}
		
		public function actualizar(){
			
            echo $empleado_rol_codigo = $_POST['empleado_rol_codigo'];
			echo $cedula = $_POST['cedula'];
		    echo $nombre_empleado = $_POST['nombre_empleado'];
			echo $apellido_empleado = $_POST['apellido_empleado'];
			echo $sexo_esmpleado = $_POST['sexo_esmpleado'];
			echo $direccion_empleado = $_POST['direccion_empleado'];					
			echo $correo_empleado = $_POST['correo_empleado'];
			echo $area_codigo = $_POST['area_codigo'];
			echo $rol_codigo = $_POST['rol_codigo'];
			 
			 


			$empleados = new Empleados_Model();
			$empleados->modificar($cedula,$nombre_empleado, $apellido_empleado, $sexo_esmpleado, $direccion_empleado,$correo_empleado);
			$empleados->modificar2($empleado_rol_codigo,$rol_codigo,$area_codigo);
			$data["titulo"] = "Empleados";
			$this->index();
		}
		
		public function eliminar($id){
			
			$empleados  = new Empleados_Model();
			$empleados ->eliminar($id);
			$data["titulo"] = "Empleados";
			$this->index();
		}	
}
?>