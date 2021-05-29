<?php session_start(); 

require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/show_lessee_profile.model.php';

if (isset($_GET['id']) && !empty($_GET['id'])){
	$id = dataClean($_GET['id']);
}

$lessee = getLessee($id);
$properties = getProperties($id);

require FOLDER.'views/show_lessee_profile.view.php';

?>