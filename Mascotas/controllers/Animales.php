 <?php
	
	class AnimalesController {
		
		public function __construct(){
			require_once "../models/AnimalModel.php";
		}
		
		public function index(){
			
			
			$animales = new Animales_model();
			$data["titulo"] = "Animales";
			$data["animales"] = $animales->get_animales();
			
			require_once "../views/animales/animal.php";	
		}
//------------------------------------------------------------------------
		public function nuevo(){
			
			$data["titulo"] = "animales";
			require_once "../views/animales/animal_nuevo.php";
		}
		
		public function guarda(){
		    
			$nombre = $_POST['nombre'];
			$especie = $_POST['especie'];
			$raza = $_POST['raza'];
			$genero = $_POST['genero'];
			$color = $_POST['color'];
			$edad = $_POST['edad'];
						
			$animales = new Animales_model();
			$animales->insertar($nombre, $especie, $raza, $genero, $color, $edad);
			$data["titulo"] = "Animales";
			$this->index();
		}
		
		public function modificar($id){
			
			$animales = new Animales_model();
			
			$data["id"] = $id;
			$data["animales"] = $animales->get_animal($id);
			$data["titulo"] = "Animales";
			require_once "../views/animales/animal_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
		    $nombre = $_POST['nombre'];
			$especie = $_POST['especie'];
			$raza = $_POST['raza'];
			$genero = $_POST['genero'];
			$color = $_POST['color'];
			$edad = $_POST['edad'];
			
			$animales = new Animales_model();
			$animales->modificar($id, $nombre, $especie, $raza, $genero, $color,$edad);
			$data["titulo"] = "Animales";
			$this->index();
		}
		
		public function eliminar($id){
			
			$animales = new Animales_model();
			$animales->eliminar($id);
			$data["titulo"] = "Animales";
			$this->index();
		}	
}
?>