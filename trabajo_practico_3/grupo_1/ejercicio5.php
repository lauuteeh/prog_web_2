	<!DOCTYPE html>
<html>
<head>
	<!--Ejercicio Nro. 5:Tomando como base el siguiente array, recórrala por orden y de-vuelva el valor másalto, luego multiplíquelo por el más
bajo. $pepe = (23,35,54,12,34);-->
</head>
<body>


	
 	<?php

 	
 	$pepe =array(23,35,54,12,34);

 		$max=max($pepe);
 		$min=min($pepe);

 		$resul= $max*$min;

 		echo "$resul";

	?>	



</body>
</html>