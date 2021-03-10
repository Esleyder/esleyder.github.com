<?php
require_once 'model/animal.php';
class AnimalController
{
 private $model;
 public function __construct()
 {
 	$this->model = new Animal();
 }
public function indexAnimal()
{
	 require_once 'view/animal.php';
}
public function showById()
{
	$animal=new Animal();
	if(isset($_REQUEST['id'])){
		$animal=$this->model->getById($_REQUEST['id']);
	}
	require_once 'view/animalform.php';
}

public function save()
{
	$animal=new Animal();
	$animal->id=$_REQUEST['id'];
	$animal->nombre=$_REQUEST['nombre'];
	$animal->especie=$_REQUEST['especie'];
	$animal->raza=$_REQUEST['raza'];
	$animal->genero=$_REQUEST['genero'];
	$animal->color=$_REQUEST['color'];
	$animal->edad=$_REQUEST['edad'];
    $animal->id>0?$animal->update():$animal->create();
    header ('Location: index.php');
}

public function quit()
{
	$this->model->delete($_REQUEST['id']);
	header('Location: index.php');
}


}

?>