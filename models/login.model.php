<?php require 'connection.php'; 

function getUser($uname, $password){

	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('SELECT * FROM administrators WHERE uname = :uname');

	$result = $statement->execute(array(
							':uname' => $uname
						));

	return $statement->fetch();	
}

function verifyEmail($email){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('SELECT * FROM administrators WHERE email = :email');

	$result = $statement->execute(array(
							':email' => $email
						));

	return $statement->fetch();
}

function updateUser($email, $uniqIdStr){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('UPDATE administrators set fgt_pass = :fgt_pass WHERE email = :email');

	$result = $statement->execute(array(
							':email' => $email,
							':fgt_pass' => $uniqIdStr
						));

	return $statement->rowCount();

}
?>