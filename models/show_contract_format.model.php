<?php  

require FOLDER.'models/connection.php';

function getContract($id){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM contracts WHERE id =:id');
	$statement -> execute(array(':id' => $id));
	return $statement->fetch();
}

function getLesseeData($id_lessee){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('SELECT * FROM lessees WHERE id = :id_lessee');
	$statement->execute(array(':id_lessee' => $id_lessee));

	return $statement->fetch();
}

function getLessorData($id_lessor){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('SELECT * FROM lessors WHERE id = :id_lessor');
	$statement->execute(array(':id_lessor' => $id_lessor));

	return $statement->fetch();
}


function getPropertyData($id_property){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('SELECT * FROM properties WHERE id = :id_property');
	$statement->execute(array(':id_property' => $id_property));

	return $statement->fetch();
}

?>
