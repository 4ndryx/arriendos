<?php 
require FOLDER.'models/connection.php'; 

function getLessor($id){
	$con = con();

	if (!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM lessors WHERE id = :id');
	$statement->execute(array(':id' => $id));
	return $statement->fetch();
}

function getProperties($id){
	$con = con();

	if(!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM properties WHERE id_lessor = :id');
	$statement->execute(array(':id' => $id));
	return $statement->fetchAll();
}

function getPpts(){
	$con = con();

	if(!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM properties WHERE id_lessor = :none');
	$statement->execute(array(':none' => 0));
	return $statement->fetchAll();
}

function savepptData($id_ppt, $lrId){
	$con = con();

	if(!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('UPDATE properties SET id_lessor = :id_lessor WHERE id = :id_ppt');
	$statement->execute(array(':id_ppt' => $id_ppt,
							  ':id_lessor' => $lrId));

	return $statement->rowCount();

}

function getpptdata($id_ppt){
	$con = con();

	if(!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM properties WHERE id = :id_ppt');
	$statement->execute(array(':id_ppt' => $id_ppt));
	return $statement->fetch();
}

?>