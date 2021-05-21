<?php session_start();
require '../../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'admin/models/add_user.model.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){ //verificando el tipo de peticion
	$name = $_POST['name'];
	$uname = $_POST['uname'];
	$password = $_POST['password'];

	$statement = postUser($uname, $name, $password); //posteo y guardado del usuario, nombre y contrasena

	if (ajax()){
		if($statement->rowCount()>0){ //verificando si hay lineas afectadas para enviar un resultado verdadero o falso
			die(json_encode(array('result' => true)));
		}else{
			die(json_encode(array('result' => false)));
	}
}
}
require FOLDER.'admin/views/add_user.view.php';

?>