<?php
	
	class Adopciones_model {
		
		private $db;
		private $adopciones;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->adopciones = array();
		}
		
		public function get_adopciones()
		{
			$sql = "select usuario.nombre_usuario,usuario.cedula,usuario.correo,usuario.celular,usuario.telefono,animal.nombre,adopcion.fecha_adpcion,adopcion.razon,adopcion.id from usuario,adopcion,animal where adopcion.id_usuario=usuario.id AND adopcion.id_animal=animal.id";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->adopciones[] = $row;
			}
			return $this->adopciones;
		}

//---------------------------------------------------------------------------



       public function insertar($id_animal, $id_usuario, $fecha_adpcion, $razon){
			
		$resultado = $this->db->query("INSERT INTO adopcion (id_animal, id_usuario, fecha_adpcion, razon) VALUES ('$id_animal', '$id_usuario', '$fecha_adpcion', '$razon')");
			
		}
		
		public function modificar($id_animal, $id_usuario, $fecha_adpcion, $razon){
			
			$resultado = $this->db->query("UPDATE adopcion SET id_animal='$id_animal', id_usuario='$id_usuario', fecha_adpcion='$fecha_adpcion', razon='$razon' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM adopcion WHERE id = '$id'");
			
		}
		
		public function get_adopcion($id)
		{
			$sql = "SELECT * FROM adopcion WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}

}

?>