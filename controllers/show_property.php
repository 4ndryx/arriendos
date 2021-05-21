<?php session_start();

require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/show_property.model.php';

$properties = getAllProperties();

// var_dump($users);
	// echo $name,$uname,$password;
	// header('Location:'.LINK.'index.php');

require FOLDER.'views/show_property.view.php';

?>