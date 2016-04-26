<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	if(isset($_COOKIE["jedi"])){
		header("location:login.php");

	}

	if(isset($_COOKIE["sith"])){
		header("location:login.php");
	}

?>

<form action="login.php" method="post" name="login">

<h1>Iniciar Secion </h1>
<input type="text" name="usuario" placeholder="Usuario"></input>
<br>
<input type="Password" name="pass" placeholder="Password"></input>
<br>

<input type="submit" name="enviar">
</form>

</body>
</html>