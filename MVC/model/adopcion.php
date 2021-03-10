<?php
require_once 'core/crud.php';
 

class adopcion extends Crud
{
private $id;
private $id_animal;
private $id_usuario;
private $fecha_adpcion;
private $razon;
const TABLE='adopcion';
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
    $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (id_animal,	id_usuario,	fecha_adpcion,	razon) VALUES (?,?,?,?)");
    $stm->execute(array($this->id_animal,$this->id_usuario,$this->fecha_adpcion,$this->razon));
  }catch(PDOException $e){
    echo $e->getMessage();
  }

  }
  public function update(){
 

  }

}
?>