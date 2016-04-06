<<!DOCTYPE html>
<html>

<head></head>

<body>

		<!--Ejercicio Nro. 4: Escribir un programa php que calcule el área de un trapecio.
.
.
		-->	

		<?php

			function area_rectangulo ($base_menor , $base_mayor, $altura)
			{
				$resultado=(($base_menor+$base_mayor)/2)*$altura;
				return $resultado;

			}

			$base_menor=2;
			$base_mayor=4;
			$altura=4;

			$resultado2= area_rectangulo($base_menor , $base_mayor, $altura);

			echo "$resultado2 cm2";


		?>	



</body>
</html>