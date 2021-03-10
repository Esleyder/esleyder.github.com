<?php
 if(!isset($_REQUEST['controller'])){
 	require_once 'controller/usuario_controller.php';
 	$controller=new UsuarioController();
 	$controller->indexUsuario();
 }else{
 	$controller=$_REQUEST['controller'];
 	$action=$_REQUEST['action'];
 	require_once 'controller/'.$controller.'_controller.php';
 	$controller =ucwords($controller).'controller';
 	$controller=new $controller;
 	call_user_func(array($controller,$action));
 }
?>




