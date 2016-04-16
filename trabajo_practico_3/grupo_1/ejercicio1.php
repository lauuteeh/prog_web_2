<!DOCTYPE html>
<html>
<head>
	<!--Ejercicio Nro. 1: Utilizando HTML y PHP, cree una página que, según la hora del día, devuelva el texto “buenos días” o “buenas tardes” o “buenas noches”.-->
</head>
<body>


	
 <?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

$now2 = date('H:i'); 
echo date($now2); 
echo "<br>";


	if($now2 >= 6 && $now2 < 13)
	{
		echo "Buenos Dias";

	}elseif ($now2 >= 13 && $now2 <=19) {
		
		echo "Buenas Tardes";

	}else {

		echo "Buenas Noches";		
	}

?>




</body>
</html>