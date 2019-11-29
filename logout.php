<?php
	require_once 'init.php';
	require_once 'function.php';
	//xu ly logic o day
	unset($_SESSION['userId']);
	header('Location: index.php');
	