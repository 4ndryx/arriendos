<?php 

function con(){
	$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$cleardb_server = $cleardb_url["host"];
	$cleardb_username = $cleardb_url["user"];
	$cleardb_password = $cleardb_url["pass"];
	$cleardb_db = substr($cleardb_url["path"],1);
	try {
		$connection = new PDO("mysql:host=$cleardb_server;dbname=$cleardb_db", "$cleardb_username", "$cleardb_password");
		return $connection;
		
	} catch (PDOException $e) {
		return false;
	}
}

function ajax(){
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

 ?>