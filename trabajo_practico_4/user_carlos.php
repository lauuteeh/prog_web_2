<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<?php
	require_once("seguro.php");
	

	?>
<div class="form">
	<h1>Bienvenido Carlos !</h1>
	<div class="imagen">
		<img src='carlos_bala.jpg' width='300px' height='200px'>
	</div>

	<form action="logout.php" method="post" name="logout"> 
	
	<input type="submit" name="logout" value="Cerrar sesion" class="enviar"></input>

	
	</form>
</div>

</body>
</html>