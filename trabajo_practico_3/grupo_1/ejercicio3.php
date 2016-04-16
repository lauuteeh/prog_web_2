<!DOCTYPE html>
<html>
<head>
	<!--Ejercicio Nro. 3: Tomando como base el siguiente array, recórrala por orden y devuelva la posición de un valor dado en la variable $valor_a_encontrar.
	$pepe = (“gato”,”perro”,”caballo”,”pez”,”tomate”);-->
</head>
<body>


	
 	<?php

 	$valor_a_encontrar = 2;
 	$pepe = array("gato","perro","caballo","pez","tomate");

 	for ($i=0; $i <= $valor_a_encontrar ; $i++) { 
 		
 		if($i == $valor_a_encontrar){

 			echo $pepe["$valor_a_encontrar"];

 		}

 	}

 	



	?>	




</body>
</html>