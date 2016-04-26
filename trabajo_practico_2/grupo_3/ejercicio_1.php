<<!DOCTYPE html>
<html>

<head></head>

<body>

		<!--Ejercicio Nro. 1: Escribir un programa php que resuelva la ecuación x2+2*x+b, conociendo los valores de x y b

		-->	

		<?php

			
			function ecuacion ($x,$b){
				
				$resultado=($x*$x)+(2*$x)+$b;
				return $resultado;
			}

			$x=3;
			$b=1;

			$resultado2=ecuacion($x,$b);
			echo $resultado2;

		?>	



</body>
</html>