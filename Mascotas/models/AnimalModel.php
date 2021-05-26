<?php
	
	class Animales_model {
		
		private $db;
		private $animales;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->animales = array();
		}
		
		public function get_animales()
		{
			$sql ="SELECT * FROM animal";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->animales[] = $row;
			}
			return $this->animales;
		}





       public function insertar($nombre, $especie, $raza, $genero, $color,$edad){
			
		$resultado = $this->db->query("INSERT INTO animal (nombre, especie, raza, genero, color,edad) VALUES ('$nombre', '$especie', '$raza', '$genero', '$color', '$edad')");
			
		}
		
		public function modificar($id,$nombre, $especie, $raza, $genero, $color,$edad){
			
			$resultado = $this->db->query("UPDATE animal SET nombre='$nombre', especie='$especie', raza='$raza', genero='$genero', color='$color', edad='$edad' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM animal WHERE id = '$id'");
			
		}
		
		public function get_animal($id)
		{
			$sql = "SELECT * FROM animal WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}

}

?>