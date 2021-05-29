<?php session_start();

require '../public/config.php';

require FOLDER.'models/reset.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	if(isset($_GET['fgt_pass'])){
		if(!empty($_GET['fgt_pass'])){
			$fgt = dataClean($_GET['fgt_pass']);
		}else{
			// header('Location:'.LINK.'controllers/login.php');
		}
	}else{
	// header('Location:'.LINK.'controllers/login.php');
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['fgt'])){
			if (!empty($_POST['pass'] && !empty($_POST['passConf']))) {
				if ($_POST['pass'] != $_POST['passConf']) {
					if(ajax()){die(json_encode(['result' => false, 'msg' => 'Las contrasenas deben coincidir']));}
				}else{
					$fgt = dataClean($_POST['fgt']);
					$newPass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
					$savePass = updatePass($fgt, $newPass);
					if ($savePass) {
						if(ajax()){die(json_encode(['result' => true, 'msg' => 'Se ha cambiado la contrasena con exito. Porfavor inicie session normalmente.']));}
					}else{if(ajax()){die(json_encode(['result' => false, 'msg' => 'Ocurrio algun error, vuelve a intentarlo']));}}
				}
		}else{
			if(ajax()){die(json_encode(['result' => false, 'msg' => 'Todos los campos son obligatorios']));}
		}
	}else{
		if(ajax()){die(json_encode(['result' => false, 'msg' => 'No esta autorizado para esta seccion']));}
	}
}
require FOLDER.'views/reset.view.php'; ?>