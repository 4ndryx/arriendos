<?php session_start();

require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/show_property.model.php';

$properties = getAllProperties();

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id'])){
	if (!empty($_GET['action']) && !empty($_GET['id'])) {
		$action =htmlspecialchars($_GET['action']);
		$id =htmlspecialchars($_GET['id']);

		if ($action == 'delete'){
			$deleteProperty = deleteProperty($id);
		}

		if($deleteProperty != 0){
			if (ajax()){die(json_encode(array('result' => true)));}
		}else{if (ajax()){die(json_encode(array('result' => false)));}
		}
	}
}
require FOLDER.'views/show_property.view.php';

?>