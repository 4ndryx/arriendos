<?php session_start(); 

require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/show_contract_format.model.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = dataClean($_GET['id']);
	# code...
	$contract = getContract($id);
	if ($contract) {
		$idLessor = $contract['id_lessor'];
		$idLessee = $contract['id_lessee'];
		$idProperty = $contract['id_property'];
	}
	$lessee = getLesseeData($idLessee);
	$lessor = getLessorData($idLessor);
	$property = getPropertyData($idProperty);
}

require FOLDER.'views/show_contract_format.view.php';

?>