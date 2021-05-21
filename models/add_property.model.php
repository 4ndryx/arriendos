<?php require 'connection.php'; 

function postProperty($adress, $area, $type, $state, $description, $img){

	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('INSERT INTO properties(id, adress, area, type, state, description, img)
								VALUES(null, :adress, :area, :type, :state, :description, :img)');

	$statement->execute(array(
							':adress' => $adress, 
							':area' => $area, 
							':type' => $type, 
							':state' => $state, 
							':description' => $description, 
							':img' => $img
						));
	$result = $statement->rowCount();
	$stt = $con->query('SELECT LAST_INSERT_ID()');
	$rst = $stt->fetch()[0];
	return array($result, $rst);

}


function getProperty($id){
	$con = con();

	if (!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM properties WHERE id = :id');
	$statement->execute(array(':id' => $id));
	return $statement->fetch();
}

function updateProperty($id, $state, $description, $img){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('UPDATE properties SET state = :state, description = :description, img = :img WHERE id = :id');
	$statement->execute(array(
							':id' => $id,
							':state' => $state, 
							':description' => $description, 
							':img' => $img
						));
	
	$result = $statement->rowCount();
	return $result;

}


?>