<?php 
require FOLDER.'models/connection.php'; 

function getLessee($id){
	$con = con();

	if (!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM lessees WHERE id = :id');
	$statement->execute(array(':id' => $id));
	return $statement->fetch();
}

function getProperties($id){
	$con = con();

	if (!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM properties WHERE id_lessee = :id');
	$statement->execute(array(':id' => $id));
	return $statement->fetchAll();
}

?>