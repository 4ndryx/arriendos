<?php  

require FOLDER.'models/connection.php';

function getLessors(){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT id, fname, lname, phone, adress FROM lessors');
	$statement -> execute(array());
	return $statement->fetchAll();
}

function deletelessor($id){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('DELETE FROM lessors WHERE id = :id');
	$statement -> execute(array(':id' => $id));
	$statement2 = $con->prepare('UPDATE properties SET id_lessor = :DI WHERE id_lessor = :id');
	$statement2 -> execute(array(':id' => $id,
									':DI' => ''));

	return $statement->rowCount();
}

?>