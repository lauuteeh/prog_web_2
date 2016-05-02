<?php
	
	session_start();

	if(!isset($_SESSION["log"])){
		
		session_destroy();
		header("location:denegado.php");

	}

	if(!$_SESSION["log"]){
		
		session_destroy();
		header("location:denegado.php");

	}

?>