<<!DOCTYPE html>
<html>

<head></head>

<body>

		<!--Ejercicio Nro. 4: Escribir un programa phpque dados tres números imprima el menor de ellos.

		-->	

		<?php

		$var1=4;
		$var2=3;
		$var3=2;

		if($var1<$var2){
			if($var1<$var3){
				echo"$var1 es el numero menor";
			}
		}else{
			if($var2<$var3){
				echo"$var2 es el numero menor";
			}else{
				echo"$var3 es el numero menor";
			}

		}

			

		?>	



</body>
</html>