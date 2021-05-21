<?php session_start();
require '../public/config.php';
require FOLDER.'controllers/session.php';
require FOLDER.'models/dashboard.model.php';
	$nbLessees = getNbLessee();
	$nbLessors = getNbLessor();
	$nbProperties = getNbProperty();
	$nbContracts = getNbContract();
require FOLDER.'views/dashboard.view.php';