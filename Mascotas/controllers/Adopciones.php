<?php
	
	class AdopcionesController {
		
		public function __construct(){
			require_once "../models/AdopcionModel.php";
		}
		
		public function index(){
			
			
			$adopciones = new Adopciones_model();
			$data["titulo"] = "Adopciones";
			$data["adopciones"] = $adopciones->get_adopciones();
			
			require_once "../views/adopciones/adopcion.php";	
		}
//------------------------------------------------------------------------
		public function nuevo(){
			
			$data["titulo"] = "adopciones";
			require_once "../views/adopciones/adopcion_nuevo.php";
		}
		
		public function guarda(){
		    
			$id_animal = $_POST['id_animal'];
			$id_usuario = $_POST['id_usuario'];
			$fecha_adpcion = $_POST['fecha_adpcion'];
			$razon = $_POST['razon'];
			
			
			$adopciones = new Adopciones_model();
			$adopciones->insertar($id_animal, $id_usuario, $fecha_adpcion, $razon);
			$data["titulo"] = "Adopcion";
			$this->index();
		}
		
		public function modificar($id){
			
			$adopciones = new Adopciones_model();
			
			$data["id"] = $id;
			$data["adopciones"] = $adopciones->get_adopcion($id);
			$data["titulo"] = "Adopciones";
			require_once "../views/adopciones/adopcion_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
		    $id_usuario = $_POST['id_usuario'];
			$id_animal = $_POST['id_animal'];
			$fecha_adpcion = $_POST['fecha_adpcion'];
			$razon = $_POST['razon'];
			


			$adopciones = new Adopciones_model();
			$adopciones->modificar($id, $id_animal, $id_animal, $fecha_adpcion, $razon);
			$data["titulo"] = "Adopciones";
			$this->index();
		}
		
		public function eliminar($id){
			
			$adopciones = new Adopciones_model();
			$adopciones->eliminar($id);
			$data["titulo"] = "Adopciones";
			$this->index();
		}	
}
?>