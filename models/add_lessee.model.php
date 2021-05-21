<?php  
require FOLDER.'models/connection.php';

function postLessee($fname, $lname, $id, $email, $phone, $home_phone, $adress, $ocupation, $nacionality, $civil_status, $img){

	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('INSERT INTO lessees(id, fname, lname, email, phone, adress, img, ocupation, civil_status, nacionality, home_phone) VALUES(:id, :fname, :lname, :email, :phone, :adress, :img, :ocupation, :civil_status, :nacionality, :home_phone)');
	$statement->execute(array(
							':id' => $id,
							':fname' => $fname,
							':lname' => $lname,
							':email' => $email,
							':phone' => $phone,
							':adress' => $adress,
							':img' => $img,
							':ocupation' => $ocupation,
							':civil_status' => $civil_status,
							':nacionality' => $nacionality,
							':home_phone' => $home_phone
						));

	return $statement->rowcount();
}

function getLessee($id){
	$con = con();

	if (!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM lessees WHERE id = :id');
	$statement->execute(array(':id' => $id));
	return $statement->fetch();
}

function updateLessee($id, $email, $phone, $home_phone, $adress, $ocupation, $civil_status, $img){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('UPDATE lessees SET email = :email, phone = :phone, adress = :adress, img = :img, ocupation = :ocupation, civil_status = :civil_status, home_phone = :home_phone WHERE id = :id');
	$statement->execute(array(
							':id' => $id,
							':email' => $email,
							':phone' => $phone,
							':adress' => $adress,
							':img' => $img,
							':ocupation' => $ocupation,
							':civil_status' => $civil_status,
							':home_phone' => $home_phone
						));
	
	$result = $statement->rowCount();
	return $result;

}

?>