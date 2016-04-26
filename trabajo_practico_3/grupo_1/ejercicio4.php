	<!DOCTYPE html>
<html>
<head>
	<!--Ejercicio Nro. 4:Tomando como base el siguiente array, recórrala por orden y de-vuelva otro array invirtiendo la posición de los elementos de la primera.
	$pepe = (“gato”,”perro”,”caballo”,”pez”,”tomate”);-->
</head>
<body>


	
 	<?php

 	$valor_a_encontrar = 1;
 	$pepe = array("gato","perro","caballo","pez","tomate");

 	$reverse = array_reverse($pepe, false);

 	for ($i=0; $i <= $valor_a_encontrar ; $i++) { 
 		
 		if($i == $valor_a_encontrar){

 			echo $reverse["$valor_a_encontrar"];

 		}

 	}


	?>	



</body>
</html>