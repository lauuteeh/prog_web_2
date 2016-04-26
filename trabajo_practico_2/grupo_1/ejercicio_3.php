<<!DOCTYPE html>
<html>

<head></head>

<body>

		<!--Ejercicio Nro. 3: Escribir un programa php que calcule el área de un rectángulo
.
.
		-->	

		<?php

			function area_rectangulo ($base , $altura)
			{
				$resultado=($base*$altura);
				return $resultado;

			}

			$base=2;
			$altura=4;

			$resultado2= area_rectangulo($base,$altura);

			echo "$resultado2 cm2";


		?>	



</body>
</html>