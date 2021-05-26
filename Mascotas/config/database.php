<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "", "sunny_side");
			return $conexion;
			
		}
	}
?>