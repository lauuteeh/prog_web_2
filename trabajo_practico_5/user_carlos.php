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
	<h1>Bienvenido <?php if(isset($_COOKIE["mostrar_usuario"]))echo $_COOKIE["mostrar_usuario"]; ?></h1>
	<form action="logout.php" method="post" name="logout"> 
	
	<input type="submit" name="logout" value="Cerrar sesion" class="enviar"></input>

	
	</form>
</div>

</body>
</html>