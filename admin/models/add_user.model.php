<?php require FOLDER.'models/connection.php'; 

function postUser($uname, $name, $password){ // funcion que recupera los datos de los usuarios, y los envia a la base deds=

	$password = password_hash($password, PASSWORD_BCRYPT);
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('INSERT INTO administrators(id, uname, name, password)
								VALUES(null, :uname, :name, :password)');

	$result = $statement->execute(array(
							':uname' => $uname,
							':name' => $name,
							':password' => $password));

	return $statement;

}


?>