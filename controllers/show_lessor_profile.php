<?php session_start(); 

require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/show_lessor_profile.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (!empty($_POST)) {
		if (isset($_POST['pptId']) && isset($_POST['lrId'])) {
			$id_ppt = dataClean($_POST['pptId']);
			$lrId = dataClean($_POST['lrId']);
			$data = savepptData($id_ppt, $lrId);
			$ppt = getpptdata($id_ppt);
			if($data){
				die(json_encode(array('response' => [true, $ppt])));
			}else{die(json_encode(array('response' => [false])));}
		}
	}
}else{
	if (isset($_GET['id']) && !empty($_GET['id'])){
		$id = dataClean($_GET['id']);
	}

	$lessor = getLessor($id);
	$properties = getProperties($id);
	$ppts = getPpts();
}


require FOLDER.'views/show_lessor_profile.view.php';

?>