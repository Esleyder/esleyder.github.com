 <?php
	
	class UsuariosController {
		
		public function __construct(){
			require_once "../models/UsuarioModel.php";
		}
		
		public function index(){
			
			
			$usuarios = new Usuarios_model();
			$data["titulo"] = "Usuarios";
			$data["usuarios"] = $usuarios->get_usuarios();
			
			require_once "../views/usuarios/usuario.php";	
		}

		public function nuevo(){
			
			$data["titulo"] = "usuarios";
			require_once "../views/usuarios/usuario_nuevo.php";
			
			
		}
		
		public function guarda(){
		    
			$nombre_usuario = $_POST['nombre_usuario'];
			$apellido = $_POST['apellido'];
			$sexo = $_POST['sexo'];
			$direccion = $_POST['direccion'];
			$telefono = $_POST['telefono'];
			$edad = $_POST['edad'];
			$cedula = $_POST['cedula'];
			$correo = $_POST['correo'];
			$contraseña = $_POST['contraseña'];
			$celular = $_POST['celular'];
			

			$usuarios = new Usuarios_model();
			$usuarios->insertar($nombre_usuario, $apellido, $sexo, $direccion, $telefono, $edad,$cedula,$correo,$contraseña,$celular);
			$data["titulo"] = "Usuarios";
			$this->index();
		}
		
		public function modificar($id){
			
			$usuarios = new Usuarios_model();
			
			$data["id"] = $id;
			$data["usuarios"] = $usuarios->get_usuario($id);
			$data["titulo"] = "Usuarios";
			require_once "../views/usuarios/usuario_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
		    $nombre_usuario = $_POST['nombre_usuario'];
			$apellido = $_POST['apellido'];
			$sexo = $_POST['sexo'];
			$direccion = $_POST['direccion'];
			$telefono = $_POST['telefono'];
			$edad = $_POST['edad'];
			$cedula = $_POST['cedula'];
			$correo = $_POST['correo'];
			$contraseña = $_POST['contraseña'];
			$celular = $_POST['celular'];


			$usuarios = new Usuarios_model();
			$usuarios->modificar($id, $nombre_usuario, $apellido, $sexo, $direccion, $telefono,$edad,$cedula,$correo,$contraseña,$celular);
			$data["titulo"] = "Usuarios";
			$this->index();
		}
		
		public function eliminar($id){
			
			$usuarios = new Usuarios_model();
			$usuarios->eliminar($id);
			$data["titulo"] = "Usuarios";
			$this->index();
		}	
}
?>