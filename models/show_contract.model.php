<?php  

require FOLDER.'models/connection.php';

function getContracts(){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT id,id_lessor,id_lessee,id_property,bill,deposite, start_date,end_date,pay_day FROM contracts');
	$statement -> execute(array());
	return $statement->fetchAll();
}

function deleteContract($id){

	$con = con();

	if (!$con){
		header('Location:error.php');
	}

	$stt = $con->prepare('SELECT id_lessee FROM contracts WHERE id = :id');
	$stt -> execute(array(':id' => $id));
	$idle = $stt->fetch()['id_lessee'];
	$statement = $con->prepare('DELETE FROM contracts WHERE id = :id');
	$statement -> execute(array(':id' => $id));
	$statement2 = $con->prepare('UPDATE properties SET id_lessee = :DI WHERE id_lessee = :id');
	$statement2 -> execute(array(':id' => $idle,
									':DI' => ''));

	return $statement->rowCount();
}

?>
