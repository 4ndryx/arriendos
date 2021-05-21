<?php session_start();

require '../../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'admin/models/show_user.model.php';

$users = getAllUsers(); //funcion que recupera los datos de los usuarios

// var_dump($users);
	// echo $name,$uname,$password;
	// header('Location:'.LINK.'index.php');

require FOLDER.'admin/views/show_user.view.php';

?>