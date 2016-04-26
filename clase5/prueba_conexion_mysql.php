<?php
//paso 1
$conexion = mysqli_connect("127.0.0.1:3306","root","") or die("gdfgf");

//paso 2
mysqli_select_db($conexion,"redaccion") or die("asd");

//paso 3
$consulta=mysqli_query($conexion,"SELECT * FROM camara") or die("asd2");

//paso 4
while($resultado=mysqli_fetch_assoc($consulta)){
	echo $resultado["id_cam"];

}

//paso 5
mysqli_close($conexion);

?>
