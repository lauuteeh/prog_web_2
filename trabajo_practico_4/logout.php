<?php
		require_once("seguro.php");

		if(isset($_POST["logout"]))
	{
		session_destroy();
		
		header('refresh:2; url=http://localhost:8080/ejercicios/trabajo_practico_4/index.php'); 
		echo "Redireccionando al login...";
		
		echo "<br>";

	}

?>