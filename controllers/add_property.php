<?php session_start();
require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/add_property.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	$adress = dataClean($_POST['adress']);
	$area = dataClean($_POST['area']); 
	$type = dataClean($_POST['type']); 
	$state = dataClean($_POST['state']);
	$description = dataClean($_POST['description']);

	$imgNames = $_FILES['img']['name'];
	$imgTempNames = $_FILES['img']['tmp_name'];
	$len = count($imgNames);
	$img = null;


	if ($imgNames[0] && $imgNames[0] !='') {
		for ($i=0; $i < $len ; $i++) { 
			$img .= $imgNames[$i];
			if ($i<$len - 1) {
				$img.=', ';
			}
		}

	}else{
	$img = $_POST['oldImg'];
	}

	if(isset($_POST['id']) and $_POST['id'] != ''){
		$property = updateProperty($_POST['id'], $state, $description, $img);
	}else{
		$property = postProperty($adress, $area, $type, $state, $description, $img);
	}

	if ($property[0] != 0){
		if ($imgNames[0] && $imgNames[0] !=''){
			$dir = FOLDER.'public/img/property_img/'.$property[1].'/';

			if (!is_dir($dir)) {
				mkdir($dir, 0755, true);
			}
			for ($i=0; $i < $len ; $i++) { 
				move_uploaded_file($imgTempNames[$i], $dir.$imgNames[$i]);	
			}
		}
	
		if (ajax()){die(json_encode(array('result' => true, 't' => $property)));}
	}else{
		if (ajax()){die(json_encode(array('result' => false)));}
	
	}
}

$propertyedit = array(
					'id' => '',
					'adress' => '', 
					'area' => '', 
					'type' => '', 
					'state' => '', 
					'description' => '', 
					'img' => ''
						);

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id'])){
	if (!empty($_GET['action']) && !empty($_GET['id'])) {
		$action =dataClean($_GET['action']);
		$id =dataClean($_GET['id']);

		if ($action == 'edit'){
			$propertyedit = getProperty($id);
		}
	}
}


require FOLDER.'views/add_property.view.php';

?>