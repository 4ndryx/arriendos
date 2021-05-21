<?php require FOLDER.'models/connection.php'; 

function getAllUsers(){ // funcion que recupera los datos de los usuarios desde la base de dato

	$con = con();

	$statement = $con->prepare('SELECT * FROM administrators');

	$statement->execute();

	return $statement->fetchAll();


}
