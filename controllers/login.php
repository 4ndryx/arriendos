<?php session_start();

require '../public/config.php';

if (isset($_GET['logout'])){
	session_destroy();
}
require FOLDER.'models/login.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (isset($_POST['fgt_email'])) {
		// require FOLDER.'public/HTTP_Request2-2.4.1/HTTP/Request2.php';

		if(!empty($_POST['fgt_email'])){
			$email = $_POST['fgt_email'];
			$verif = verifyEmail($email);
			if ($verif){
				$uniqIdStr = md5(uniqid(mt_rand()));
				$updateUser = updateUser($email, $uniqIdStr);
				if ($updateUser){
					$passResetLink = LINK.'controllers/reset.php?fgt_pass='. $uniqIdStr;

					$to = $email;
					$subject = 'Solicitud de reseteo de contrasena';
					$mailContent = 'Querido '.$verif['name'].', <br />Se ha hecho una solicitud de reseteo de contrasena para su cuenta. Si ha sido por accidente, ignore este mensaje y no pasara nada. <br />Para resetear su contrasena, dale click al siguiente enlace: <a href="'. $passResetLink .'">'. $passResetLink .'</a><br><br> Saludos.';

					require_once 'HTTP/Request2.php';
					$request = new HTTP_Request2();
					$request->setUrl('https://be.trustifi.com/api/i/v1/email');
					$request->setMethod(HTTP_Request2::METHOD_POST);
					$request->setConfig(array(
					  'follow_redirects' => TRUE
					));
					$request->setHeader(array(
					  'x-trustifi-key' => '{{fff5f531024c3fce0bbb63eb5d4e4310c663f5949bc7be1d}}',
					  'x-trustifi-secret' => '{{610cc9584a932935e3076e8ae9b8dcd1}}',
					  'Content-Type' => 'application/json'
					));
					$request->setBody('{\n  "recipients": [{"email": '.$email.', "name": '.$verif['name'].'}],\n  "lists": [],\n  "contacts": [],\n  "attachments": [],\n  "title": '.$subject.',\n  "html": '.$mailContent.',\n  "methods": { \n    "postmark": false,\n    "secureSend": false,\n    "encryptContent": false,\n    "secureReply": false \n  }\n}');
					try {
					  $response = $request->send();
					  if ($response->getStatus() == 200) {
					    // echo $response->getBody();
					  }
					  else {
					    // echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
					    // $response->getReasonPhrase();
					  }
					}
					catch(HTTP_Request2_Exception $e) {
					  echo 'Error: ' . $e->getMessage();
					}

					die(json_encode(array('result' => true, 'msg' => 'Le ha sido enviado un correo, porfavor revise su bandeja de entrada.')));
				}else{
					die(json_encode(array('result' => false, 'msg' => 'Ocurrio un error, intente de nuevo.')));
				}
			}else{
				die(json_encode(array('result' => false, 'msg' => 'El correo no esta asociado con ninguna cuenta.')));
			}
		}else{
			die(json_encode(array('result' => false, 'msg' => 'Por favor ingresar un correo.')));}
	}else{
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		
		if (!empty($uname) && !empty($password)){

			$user = getUser($uname, $password);
			
				if ($user){
					if (password_verify($password, $user['password'])){
						$_SESSION['uname'] = $user['uname'];
						$_SESSION['name'] = $user['name'];
						$_SESSION['lastAccess'] = date('Y-n-j H:i:s');

						if(ajax()){die(json_encode(array('result' => true)));}

					}else{
						if(ajax()){die(json_encode(array('result' => false, 'error' => 'Datos errados')));}
					}
				}else{
						if(ajax()){die(json_encode(array('result' => false, 'error' => 'Datos errados')));}
				}
		}else{
			if(ajax()){die(json_encode(array('result' => false, 'error' => 'Debe llenar todos los campos')));}
		}	
	}

}
require FOLDER.'views/login.view.php'; ?>