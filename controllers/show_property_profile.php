<?php session_start();

require '../public/config.php';
require FOLDER.'/controllers/session.php';
require FOLDER.'models/show_property_profile.model.php';

if (isset($_GET['id']) && !empty($_GET['id'])){
	$id = $_GET['id'];

	$datos = getProperty($id);
	$imgs = explode(', ', $datos['img']);
	$lessee = getLessee($datos['id_lessee']);
	$lessor = getLessor($datos['id_lessor']);


	require FOLDER.'views/show_property_profile.view.php';
}



 ?>