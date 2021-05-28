<?php require 'connection.php'; 

function getAllProperties(){

	$con = con();

	$statement = $con->prepare('SELECT * FROM properties');

	$statement->execute();

	return $statement->fetchAll();


}
function deleteProperty($id){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('DELETE FROM properties WHERE id = :id');
	$statement -> execute(array(':id' => $id));
	return $statement->rowCount();
}
?>