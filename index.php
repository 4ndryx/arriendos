<?php session_start();
require 'public/config.php';
require FOLDER.'controllers/session.php';

verifySession();

		header('Location:'.LINK.'controllers/dashboard.php');

require FOLDER.'views/templates.php';