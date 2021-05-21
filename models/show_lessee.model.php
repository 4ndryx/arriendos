<?php  

require FOLDER.'models/connection.php';

function getLessees(){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT id, fname, lname, phone, adress FROM lessees');
	$statement -> execute(array());
	return $statement->fetchAll();
}

function deleteLessee($id){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('DELETE FROM lessees WHERE id = :id');
	$statement -> execute(array(':id' => $id));
	$statement2 = $con->prepare('UPDATE properties SET id_lessee = :DI WHERE id_lessee = :id');
	$statement2 -> execute(array(':id' => $id,
									':DI' => ''));

	return $statement->rowCount();
}

?>