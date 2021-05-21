<?php 

function con(){
	try {
		$connection = new PDO('mysql:host=localhost;dbname=administracion_arriendos', 'root', '');
		return $connection;
		
	} catch (PDOException $e) {
		return false;
	}
}

function ajax(){
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

 ?>