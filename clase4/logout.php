<?php
		require_once("seguro.php");

		if(isset($_POST["logout"]))
	{
		session_destroy();
		

		setcookie("jedi","segura_jedi", time()-30);
		setcookie("sith","segura_sith", time()-30);
		header('refresh:2; url=http://localhost:8080/ejercicios/clase4/main.php'); 
		echo "Que la fuerza te acompañe";
		
		echo "<br>";

	}

?>