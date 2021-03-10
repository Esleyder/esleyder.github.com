<?php
require_once 'model/usuario.php';
class UsuarioController
{
 private $model;
 public function __construct()
 {
 	$this->model = new Usuario();
 }
public function indexUsuario()
{
	 require_once 'view/usuario.php';
}
public function showById()
{
	$usuario=new Usuario();
	if(isset($_REQUEST['id'])){
		$usuario=$this->model->getById($_REQUEST['id']);
	}
	require_once 'view/usuarioform.php';
}

public function save()
{
	$usuario=new Usuario();
	$usuario->id=$_REQUEST['id'];
	$usuario->nombre=$_REQUEST['nombre'];
	$usuario->apellido=$_REQUEST['apellido'];
	$usuario->sexo=$_REQUEST['sexo'];
	$usuario->direccion=$_REQUEST['direccion'];
	$usuario->telefono=$_REQUEST['telefono'];
	$usuario->edad=$_REQUEST['edad'];
    $usuario->id>0?$usuario->update():$usuario->create();
    header ('Location: index.php');
}

public function quit()
{
	$this->model->delete($_REQUEST['id']);
	header('Location: index.php');
}


}

?>