<?php session_start();
require 'public/config.php';
require FOLDER.'controllers/session.php';

verifySession();

	$content = '';
	$title = 'Blank page';
	$style = '';
	$script = '';
require FOLDER.'views/templates.php'; ?>