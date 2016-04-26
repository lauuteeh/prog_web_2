<!DOCTYPE html>
<html>
<head>
	<!--Ejercicio Nro. 2: Utilizando HTML y PHP, cree una página que, según la hora del día, devuelva la imagen correspondiente similar a las tres mostradas a continuación:-->
</head>
<body>


	
 <?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

$now2 = date('H:i'); 
echo date($now2); 
echo "<br>";


	if($now2 >= 6 && $now2 < 13)
	{
		echo "<img src='Amanecer.jpg' width='500' height='300' >";

	}elseif ($now2 >= 13 && $now2 <=19) {
		
		echo "<img src='atardecer.jpg' width='500' height='300' >";

	}else {

		echo "<img src='anochecer.jpg' width='500' height='300' >";		
	}

?>




</body>
</html>