<?php require 'connection.php'; 

function getAllProperties(){

	$con = con();

	$statement = $con->prepare('SELECT * FROM properties');

	$statement->execute();

	return $statement->fetchAll();


}