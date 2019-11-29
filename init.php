<?php
require_once 'function.php';
	session_start();
	$db = new PDO('mysql:host=localhost;dbname=dack;charset=utf8', 'root', '12345678'); 

	$currentUser = null;
	if(isset($_SESSION['userId']))
	{
		$user = findUserById($_SESSION['userId']);
		if($user)
		{
			$currentUser = $user;
		}
	}
?>