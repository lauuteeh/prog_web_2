<<!DOCTYPE html>
<html>

<head></head>

<body>

		<!--Ejercicio Nro. 2: Diseñar un programa de php que devuelva el nombre de un libro a leer de entre siete disponibles a partir del valor de un autor determinado


		-->	

		<?php

			echo "1_ Cervantes<br>";
			echo "2_ Shakespeare <br>";
			echo "3_ Goethe <br>";
			echo "4_ Dante Alighieri <br>";
			echo "5_ Gustave Flaubert <br>";
			echo "6_ León Tolstoi <br>";
			echo "7_ Charles Dickens <br>";

			$var=4;
			
			echo "<br>";
			echo "Se eligio $var <br>";
			echo "<br>";

			switch ($var) {
				case '1':
					echo "Don Quijote de la mancha";
					break;
				
				case '2':
					echo "Romeo y Julieta";
					break;
				
				case '3':
					echo "La divina comedia";
					break;

				case '4':
					echo "Madame Bovary";
					break;

				case '5':
					echo "La guerra y la paz";
					break;

				case '6':
					echo "Oliver Twist";
					break;

				case '7':
					echo "Tom Sawyer";
					break;

				default:
					echo "Inserccion incorrecta";
					break;
			}



		?>	



</body>
</html>