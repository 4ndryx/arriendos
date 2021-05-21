<?php session_start(); 

require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/show_lessor.model.php';

$lessors = getLessors();

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id'])){
	if (!empty($_GET['action']) && !empty($_GET['id'])) {
		$action =htmlspecialchars($_GET['action']);
		$id =htmlspecialchars($_GET['id']);

		if ($action == 'delete'){
			$deleteLessor = deleteLessor($id);
		}

		if($deleteLessor != 0){
			if (ajax()){die(json_encode(array('result' => true)));}
		}else{if (ajax()){die(json_encode(array('result' => false)));}
		}
	}
}

require FOLDER.'views/show_lessor.view.php';

?>