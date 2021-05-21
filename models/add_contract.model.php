<?php require FOLDER.'models/connection.php';

function getLessorsId(){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->query('SELECT id FROM lessors');

	return $statement->fetchAll();
}

function getLesseesId(){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->query('SELECT id FROM lessees');

	return $statement->fetchAll();
}

function getPropertiesId($id_lessor){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('SELECT adress FROM properties WHERE id_lessor = :id_lessor');
	$statement->execute(array(':id_lessor' => $id_lessor));

	return $statement->fetchAll();
}

function getLesseeData($id_lessee){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('SELECT fname, lname, phone, home_phone, email, adress, ocupation, nacionality, civil_status, img, id FROM lessees WHERE id = :id_lessee');
	$statement->execute(array(':id_lessee' => $id_lessee));

	return $statement->fetch();
}

function getLessorData($id_lessor){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('SELECT fname, lname, phone, home_phone, email, adress, ocupation, nacionality, civil_status, img, id FROM lessors WHERE id = :id_lessor');
	$statement->execute(array(':id_lessor' => $id_lessor));

	return $statement->fetch();
}


function getPropertyData($adress_property){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('SELECT  id, area, type, state, description, img FROM properties WHERE adress = :adress_property');
	$statement->execute(array(':adress_property' => $adress_property));

	return $statement->fetch();
}

function postContract($id_lessor, $id_lessee, $id_property, $place, $start_date, $end_date, $bill, $deposite, $pay_day, $activity, $renew){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('INSERT INTO contracts
		(id, id_lessor, id_lessee, id_property, place, start_date, end_date, bill, deposite, pay_day, activity, renew)VALUES(null, :id_lessor, :id_lessee, :id_property, :place, :start_date, :end_date, :bill, :deposite, :pay_day, :activity, :renew)');
	$statement->execute(array(':id_lessor' => (int)$id_lessor,
							  ':id_lessee' => (int)$id_lessee,
							  ':id_property' => (int)$id_property,
							  ':place' => $place,
							  ':start_date' => (string)$start_date,
							  ':end_date' => (string)$end_date,
							  ':bill' => $bill,
							  ':deposite' => $deposite,
							  ':pay_day' => (string)$pay_day,
							  ':activity' => $activity,
							  ':renew' => (int)$renew));
	$id = $con->query("SELECT LAST_INSERT_ID()");
		
	$stt = $con->prepare('UPDATE properties SET id_lessee = :id_lessee WHERE id = :id_property');
	$stt->execute(array(':id_lessee' => $id_lessee,
   					    ':id_property' => $id_property));

	 return [$statement->rowcount(), $id->fetch()];

}

function getContract($id){
	$con = con();

	if (!$con) {
		header('Location:error.php');
	}

	$statement = $con->prepare('SELECT * FROM contracts WHERE id = :id');
	$statement->execute(array(':id' => $id));
	return $statement->fetch();
}

function updateContract($id, $end_date, $bill, $deposite, $pay_day, $activity, $renew){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('UPDATE contracts SET end_date = :end_date, bill = :bill, deposite = :deposite, pay_day = :pay_day, activity = :activity, renew = :renew WHERE id = :id');
	$statement->execute(array(
							':id' => $id,
							':end_date' => $end_date,
							':bill' => $bill,
							':deposite' => $deposite,
							':pay_day' => $pay_day,
							':activity' => $activity,
							':renew' => $renew
						));
	
	$result = $statement->rowCount();
	return $result;
}

function getPropertyEditData($id_property){
	$con = con();

	if (!$con){
		header('Location:'.LINK.'error.php');
	}

	$statement = $con->prepare('SELECT * FROM properties WHERE id = :id_property');
	$statement->execute(array(':id_property' => $id_property));

	return $statement->fetch();
}


?>

