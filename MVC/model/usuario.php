<?php
require_once 'core/crud.php';

class Usuario extends crud
{
private $id;
private $nombre;
private $apellido;
private $sexo;
private $direccion;
private $telefono;
private $edad;
const TABLE='usuario';
private $pdo;

public function __construct()
  {
    parent::__construct(self::TABLE);
    $this->pdo=parent::conexion();
  }

  public function __set($nombre,$value){
    $this->$nombre=$value;
  }
  public function __get($nombre){
    return $this->$nombre;
  }

  public function create(){
    try{
    $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (nombre, apellido,	sexo,	direccion,	telefono,	edad) VALUES (?,?,?,?,?,?)");
    $stm->execute(array($this->nombre,$this->apellido,$this->sexo,$this->direccion,$this->telefono,$this->edad));
  }catch(PDOException $e){
    echo $e->getMessage();
  }

  }
  public function update(){
        try{
    $stm=$this->pdo->prepare(" UPDATE ".self::TABLE." SET  nombre=?, apellido=?, sexo=?, direccion=?, telefono=?,  edad=? WHERE id=?");
    $stm->execute(array($this->nombre,$this->apellido,$this->sexo,$this->direccion,$this->telefono,$this->edad,$this->id));
    }catch(PDOException $e){
    echo $e->getMessage();
  }
 

  }
}



?>