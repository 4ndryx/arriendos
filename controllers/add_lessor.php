<?php session_start();

require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/add_lessor.model.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$fname = dataClean($_POST['fname']);
	$lname = dataClean($_POST['lname']);
	$id = dataClean($_POST['id']);
	$email = dataClean($_POST['email']);
	$phone = dataClean($_POST['phone']);
	$home_phone = dataClean($_POST['home_phone']);
	$adress = dataClean($_POST['adress']);
	$ocupation = dataClean($_POST['ocupation']);
	$nacionality = dataClean($_POST['nacionality']);
	$civil_status = dataClean($_POST['civil_status']);
	$img = $_FILES['img'];
		$img['name'] = ($_FILES['img']['name'] != '') ? $img['name']: $_POST['oldImg'];


if (getLessor($id) != 0) {
		$lessor = updateLessor($id, $email, $phone, $home_phone, $adress, $ocupation, $civil_status, $img['name']);
	}else{

		$lessor = postLessor($fname, $lname, $id, $email, $phone, $home_phone, $adress, $ocupation, $nacionality, $civil_status, $img['name']);
	}

	if($lessor != 0){
		if ($_FILES['img']['name'] != '') {
			$imgDirectory = FOLDER.'public/img/lessor_img/';

			if (!is_dir($imgDirectory)){
				mkdir($imgDirectory, 0755, true);
			}

			move_uploaded_file($img['tmp_name'], $imgDirectory.$img['name']);
		}

		if (ajax()){die(json_encode(array('result' => true, 't' => $id)));}
	}else{
		if (ajax()){die(json_encode(array('result' => false)));}

	}

}

$lessoredit = array(  'fname' =>'' ,
					'lname' =>'' ,
					'id' =>'' ,
					'email' =>'' ,
					'phone' =>'' ,
					'home_phone' =>'' ,
					'adress' =>'' ,
					'ocupation' =>'' ,
					'nacionality' =>'' ,
					'civil_status' =>'' ,
					'img' =>'' 
					);

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id'])){
	if (!empty($_GET['action']) && !empty($_GET['id'])) {
		$action =htmlspecialchars($_GET['action']);
		$id =htmlspecialchars($_GET['id']);

		if ($action == 'edit'){
			$lessoredit = getLessor($id);
		}
	}
}
require FOLDER.'views/add_lessor.view.php';



?>