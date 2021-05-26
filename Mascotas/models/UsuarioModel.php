<?php
	
	class Usuarios_model {
		
		private $db;
		private $usuarios;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->usuarios = array();
		}
		
		public function get_usuarios()
		{
			$sql = "SELECT * FROM usuario";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->usuarios[] = $row;
			}
			return $this->usuarios;
		}





       public function insertar($nombre_usuario, $apellido, $sexo, $direccion, $telefono,$edad,$cedula,$correo,$contraseña,$celular){
			
		$resultado = $this->db->query("INSERT INTO usuario (nombre_usuario, apellido, sexo, direccion, telefono,edad,cedula,correo,contraseña,celular) VALUES ('$nombre_usuario', '$apellido', '$sexo', '$direccion', '$telefono', '$edad','$cedula','$correo','$contraseña','$celular')");
			
		}
		
		public function modificar($id,$nombre_usuario, $apellido, $sexo, $direccion, $telefono,$edad,$cedula,$correo,$contraseña,$celular ){
			
			$resultado = $this->db->query("UPDATE usuario SET nombre_usuario='$nombre_usuario', apellido='$apellido', sexo='$sexo', direccion='$direccion', telefono='$telefono', edad='$edad',cedula='$cedula',correo='$correo', contraseña='$contraseña', celular='$celular' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM usuario WHERE id = '$id'");
			
		}
		
		public function get_usuario($id)
		{
			$sql = "SELECT * FROM usuario WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}

}

?>