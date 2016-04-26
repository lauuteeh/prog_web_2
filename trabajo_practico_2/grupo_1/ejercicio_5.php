<<!DOCTYPE html>
<html>

<head></head>

<body>

		<!--Ejercicio Nro. 5: Escribir un programa phpque intercambie el contenido de dos variables.
.
.
		-->	

		<?php

			

			$var1=2;
			$var2=4;

				echo "Variable 1 = $var1 , Variable 2 = $var2 <br>";

			$var3=$var1;
			$var1=$var2;
			$var2=$var3;

				echo "Se intercambian variables <br>";
				echo "Variable 1 = $var1 , Variable 2 = $var2 <br>";
			



		?>	



</body>
</html>