<?php
		require_once("seguro.php");

		if(isset($_POST["logout"]))
	{
		session_destroy();
		
		
		header('refresh:2; url=http://localhost/ejercicios/trabajo_practico_5/index.php'); 
		echo "Redireccionando al login...";
		
		echo "<br>";

	}

?>