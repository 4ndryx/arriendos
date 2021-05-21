<?php 
function verifySession(){
	if (!isset($_SESSION['uname'])){
		header('Location:'.LINK.'controllers/login.php');
	}
}

verifySession();
?>