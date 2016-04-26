<<!DOCTYPE html>
<html>

<head></head>

<body>

		<!--Ejercicio Nro. 1: Dada una variable en php realice un algoritmo que imprima un nuevo valor a partir de calcular el valor de la variable multiplicada por la iteración en que se encuentre el algoritmo. Repita el proceso hasta que el valor del resultado supere el valor de la variable elevado al valor de la variable.
		-->	

		<?php

		$z=0;
		$j=10;
		$x=0;

		while ( $z < ($j*$j)){
				
			$x=$x+1;

			$z=$j*$x;
			echo "$z <br>";

			
		} ;
			


		?>	
		



</body>
</html>