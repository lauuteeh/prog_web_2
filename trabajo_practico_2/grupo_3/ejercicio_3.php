<<!DOCTYPE html>
<html>

<head></head>

<body>

		<!--Ejercicio Nro. 3: Escribir un programa php que dados tres números, imprima el mayor de ellos.

		-->	

		<?php

		$var1=8;
		$var2=7;
		$var3=7;

		if($var1>$var2){
			if($var1>$var3){
				echo"$var1 es el numero mayor";
			}
		}else{
			if($var2>$var3){
				echo"$var2 es el numero mayor";
			}else{
				echo"$var3 es el numero mayor";
			}

		}

			

		?>	



</body>
</html>