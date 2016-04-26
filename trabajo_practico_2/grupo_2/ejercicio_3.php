<<!DOCTYPE html>
<html>

<head></head>

<body>

		<!--Ejercicio Nro. 3: Realice un programa en php que recorra los números del 1 al 20 y a cada uno de ellos los multiplique por los números del 25 al 30. Imprima el resultado en el navegador del usuario formateado en HTML
.
.
		-->	

		<?php

			

			for($var=1;$var<=20;$var++){
				for($var2=25;$var2<=30;$var2++){
					$var3=$var*$var2;
					echo"Posicion : $var, multiplicado por : $var2, resultado: $var3<br>";
				}

			}


		?>	



</body>
</html>