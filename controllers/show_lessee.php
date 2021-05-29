<?php session_start(); 

require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/show_lessee.model.php';

$lessees = getLessees();

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id'])){
	if (!empty($_GET['action']) && !empty($_GET['id'])) {
		$action =dataClean($_GET['action']);
		$id =dataClean($_GET['id']);

		if ($action == 'delete'){
			$deleteLessee = deleteLessee($id);
		}

		if($deleteLessee != 0){
			if (ajax()){die(json_encode(array('result' => true)));}
		}else{if (ajax()){die(json_encode(array('result' => false)));}
		}
	}
}

require FOLDER.'views/show_lessee.view.php';

?>