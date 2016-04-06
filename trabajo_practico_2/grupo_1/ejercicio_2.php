<<!DOCTYPE html>
<html>

<head></head>

<body>

		<!--
			Ejercicio Nro. 2: Escribir un programa phpque calcule el área de un triángulo
.
		-->	

		<?php

			function area_triangulo ($base , $altura)
			{
				$resultado=($base*$altura)/2;
				return $resultado;

			}

			$base=11;
			$altura=7;

			$resultado2= area_triangulo($base,$altura);

			echo "$resultado2 cm2";


		?>	



</body>
</html>