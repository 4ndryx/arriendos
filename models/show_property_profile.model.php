<?php 

require FOLDER.'models/connection.php';

function getProperty($id){

	$con = con();
	$statement = $con->prepare('SELECT * FROM properties WHERE id = :id');
	$statement->execute(array(':id' => $id));

	return $statement->fetch();

}

function getLessee($id){

	$con = con();
	$statement = $con->prepare('SELECT * FROM lessees WHERE id = :id');
	$statement->execute(array(':id' => $id));

	return $statement->fetch();

}

function getLessor($id){

	$con = con();
	$statement = $con->prepare('SELECT * FROM lessors WHERE id = :id');
	$statement->execute(array(':id' => $id));

	return $statement->fetch();

}


 ?>