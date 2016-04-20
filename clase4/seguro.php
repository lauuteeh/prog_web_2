<?php
	
	session_start();

	if(!isset($_SESSION["log"])){
		
		session_destroy();
		header("location:login.php");

	}

	if(!$_SESSION["log"]){
		
		session_destroy();
		header("location:login.php");

	}

?>