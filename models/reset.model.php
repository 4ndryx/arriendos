<?php require 'connection.php'; 

function updatePass($fgt, $newPass){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('UPDATE administrators set pass = :pass WHERE fgt_pass = :fgt_pass');

	$result = $statement->execute(array(
							':fgt_pass' => $fgt,
							':pass' => $newPass
						));

	return $statement->rowCount();

}
?>