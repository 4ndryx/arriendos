<?php  

require FOLDER.'models/connection.php';

function postLessor($fname, $lname, $id, $email, $phone, $home_phone, $adress, $ocupation, $nacionality, $civil_status, $img){

	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('INSERT INTO lessors(id, fname, lname, email, phone, adress, img, ocupation, civil_status, nacionality, home_phone) VALUES(:id, :fname, :lname, :email, :phone, :adress, :img, :ocupation, :civil_status, :nacionality, :home_phone)');
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
	$result = $statement->rowCount();
	return $statement->rowcount();
}

function getLessor($id){
	$con = con();

	if (!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM lessors WHERE id = :id');
	$statement->execute(array(':id' => $id));
	return $statement->fetch();
}

function updateLessor($id, $email, $phone, $home_phone, $adress, $ocupation, $civil_status, $img){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('UPDATE lessors SET email = :email, phone = :phone, adress = :adress, img = :img, ocupation = :ocupation, civil_status = :civil_status, home_phone = :home_phone WHERE id = :id');
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