<?php session_start();
require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/add_contract.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //verificando el tipo de peticion
	if (!empty($_POST)) {
		if (isset($_POST['lesseeId'])) {
			$id_lessee = $_POST['lesseeId'];
			$lessee = getLesseeData($id_lessee); //extrae los datos de arrendatarios de la base de dato 
			die(json_encode($lessee));
		}

		if (isset($_POST['lessorId'])) {
			$id_lessor = $_POST['lessorId'];
			$lessor = getLessorData($id_lessor);//extrae los datos de arrendadores de la base de dato
			$propertiesId = getPropertiesId($id_lessor);//extrae el id de las propriedades asignadas a un arrendador de la base de dato
			$lessorData = [$lessor, $propertiesId]; 
			die(json_encode($lessorData));
		}

		if (isset($_POST['propertyAdress'])) {
			$adress_property = $_POST['propertyAdress'];
			$property = getPropertyData($adress_property); //extrae los datos de las propriedades de la base de dato
			die(json_encode($property));
		}

		$id_lessor = $_POST['id_lessor'];
		$id_lessee = $_POST['id_lessee'];
		// if (ajax()){die(json_encode([$id_lessee, $id_lessor,$_POST]));}
		$id_property = $_POST['id_property'];
		$place = $_POST['place'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];
		$bill = $_POST['bill'];
		$deposite = $_POST['deposite'];
		$pay_day = $_POST['pay_day'];
		$activity = $_POST['activity'];
		$renew = $_POST['renew'];
		if(isset($_POST['id']) && !empty($_POST['id'])){
			$id = $_POST['id'];

			if(getContract($id) != 0){
				$contract = updateContract($id, $end_date, $bill, $deposite, $pay_day, $activity, $renew);
			}
		}else{

			$contract = postContract($id_lessor, $id_lessee, $id_property, $place, $start_date, $end_date, $bill, $deposite, $pay_day, $activity, $renew);
		}

		if ($contract[0]) {
			if (ajax()){die(json_encode(array('result' => true, 't' => $contract)));}
		}else{
			if (ajax()){die(json_encode(array('result' => false)));}
		}
	}
}

	$lessees = getLesseesId();
	$lessors = getLessorsId();

$contractEdit = array('id_lessor' =>'' ,
					  'id_lessee' =>'' ,
					  'id_property' =>'' ,
					  'place' =>'' ,
					  'start_date' =>'' ,
					  'end_date' =>'' ,
					  'bill' =>'' ,
					  'deposite' =>'' ,
					  'pay_day' =>'' ,
					  'activity' =>'' ,
					  'renew' =>'' );

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id'])){
	if (!empty($_GET['action']) && !empty($_GET['id'])) {
		$action =htmlspecialchars($_GET['action']);
		$id =htmlspecialchars($_GET['id']);

		if ($action == 'edit'){
			$contractEdit = getContract($id);

			if(!empty($contractEdit)){

				$id_lessee = $contractEdit['id_lessee'];
				$id_lessor = $contractEdit['id_lessor'];
				$id_property = $contractEdit['id_property'];
			}
		}
		$cttELe = getLesseeData($id_lessee);
		$cttELr = getLessorData($id_lessor);
		$cttEPpt = getPropertyEditData($id_property);
	}
}
require FOLDER.'views/add_contract.view.php';

 ?>