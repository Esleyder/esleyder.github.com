<?php
require_once 'core/crud.php';
class Animal extends Crud
{
  private $id;
  private $nombre;
  private $especie;
  private $raza;
  private $genero;
  private $color;
  private $edad;
  const TABLE='animal';
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
    $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (nombre, especie,	raza,	genero,	color,	edad) VALUES (?,?,?,?,?,?)");
    $stm->execute(array($this->nombre,$this->especie,$this->raza,$this->genero,$this->color,$this->edad));
  }catch(PDOException $e){
    echo $e->getMessage();
  }

  }
  public function update(){
    try{
    $stm=$this->pdo->prepare(" UPDATE ".self::TABLE." SET  nombre=?, especie=?, raza=?, genero=?, color=?,  edad=? WHERE id=?");
    $stm->execute(array($this->nombre,$this->especie,$this->raza,$this->genero,$this->color,$this->edad,$this->id));
    }catch(PDOException $e){
    echo $e->getMessage();
  }

  }
}

 ?>