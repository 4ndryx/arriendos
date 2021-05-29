<?php session_start();

require '../public/config.php';

if (isset($_GET['logout'])){
	session_destroy();
}
require FOLDER.'models/login.model.php';
require FOLDER.'/vendor/autoload.php';
require Folder.'vendor/autoload.php';		
use Mailgun\Mailgun;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (isset($_POST['fgt_email'])) {
		if(!empty($_POST['fgt_email'])){
			$email = $_POST['fgt_email'];
			$verif = verifyEmail($email);
			if ($verif){
				$uniqIdStr = md5(uniqid(mt_rand()));
				$updateUser = updateUser($email, $uniqIdStr);
				if ($updateUser){
					$passResetLink = LINK.'controllers/reset.php?fgt_pass='. $uniqIdStr;

					$to = $verif['email'];
					$subject = 'Solicitud de reseteo de contrasena';
					$mailContent = 'Querido '.$verif['name'].', <br />Se ha hecho una solicitud de reseteo de contrasena para su cuenta. Si ha sido por accidente, ignore este mensaje y no pasara nada. <br />Para resetear su contrasena, dale click al siguiente enlace: <a href="'. $passResetLink .'">'. $passResetLink .'</a><br><br> Saludos.';
					// $headers = "MIME-VERSION: 1.0" . "rn";
					// $headers .= "Conten-type:text/html;charset=UTF-8". "rn";
					// $headers .= "From Tu<[email protected]>". "rn";

					// mail($to, $subject, $mailContent, $headers);

					//Credentials
					$mg = new Mailgun("d2cb18512bad1157edd2d1c8148c923a-fa6e84b7-a7a171d0");
					$domain = "sandbox8f266bd3780543f7b2895f3f0743ea1f.mailgun.org";
					//email
					$mg->sendMessage($domain, array(
					'from'=>'SIADAR@sandbox8f266bd3780543f7b2895f3f0743ea1f.mailgun.org',
					'to'=> $to,
					'subject' => $subject,
					'text' => $mailContent
					    )
					);


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