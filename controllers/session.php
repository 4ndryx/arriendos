<?php 
function verifySession(){
	if (!isset($_SESSION['uname'])){
		header('Location:'.LINK.'controllers/login.php');
	// }else{
	// 	$lastAccess = $SESSION['lastAccess'];
	// 	$now = date('Y-n-j H:i:s');
	// 	$elapsedTime = (strtotime($now)-strtotime($lastAccess));
	// 	$ST = 300; // tirmpo de duracion de la seccion en segundos

	// 	if($elapsedTime>= $ST){
	// 		session_destroy();
	// 		header('Location:'.LINK.'controllers/login.php');
	// 	}else{
	// 		$SESSION['lastAccess'] = $now;
	// 	}

	// }
}


verifySession();
?>