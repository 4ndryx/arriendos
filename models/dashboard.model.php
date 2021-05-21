<?php  

require FOLDER.'models/connection.php';

function getNbLessor(){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT COUNT(*) FROM lessors');
	$statement -> execute(array());
	return $statement->fetch()[0];
}
function getNbLessee(){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT COUNT(*) FROM lessees');
	$statement -> execute(array());
	return $statement->fetch()[0];
}

function getNbProperty(){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT COUNT(*) FROM properties');
	$statement -> execute(array());
	return $statement->fetch()[0];
}

function getNbContract(){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT COUNT(*) FROM contracts');
	$statement -> execute(array());
	return $statement->fetch()[0];
}

?>
