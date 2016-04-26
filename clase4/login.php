<?php



	

	$usuario=$_POST["usuario"];
	$pass=$_POST["pass"];


		if($usuario == "jedi" && $pass=="asd" || isset($_COOKIE["jedi"])){
			session_start();
			$_SESSION["log"]=true;

			if(!isset($_COOKIE["jedi"])){
				setcookie("jedi","segura_jedi",time()+30);
			}

			header("location:segura_jedi.php");


		}elseif($usuario == "sith" && $pass=="asd1" || isset($_COOKIE["sith"])){
			session_start();
			$_SESSION["log2"]=true;

			if(!isset($_COOKIE["sith"])){	
				setcookie("sith","segura_sith",time()+30);
			}
			
			header("location:segura_sith.php");

		}else{

			header("location:main.php");

		}

		

	



?>