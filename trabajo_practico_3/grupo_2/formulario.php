<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php

			
		//Validacion Nombre

		if(isset($_POST["nombre"]) && $_POST["nombre"] !== "" ){
			
			if(soloLetras($_POST["nombre"])){
				
				if (strlen($_POST["nombre"]) >=5 && strlen($_POST["nombre"]) <=10) {
					
					echo "Nombre: ".$_POST["nombre"];
					echo "<br>";	

				}else{

					echo "#Nombre# Ingrese mas de 5 caracteres y menos de 10";

				}
			}else{
				
				echo "#Nombre# Utiliza caracteres validos";

			}
		
		}elseif ($_POST["nombre"] !== null){
			
			echo "#Nombre# No se ingreso ningun nombre";
			echo "<br>";

		}


		//Validacion Apellido

		if(isset($_POST["apellido"]) && $_POST["apellido"] !== "" ){
			
			if(soloLetras($_POST["apellido"])){
				
				if (strlen($_POST["apellido"]) >=3 && strlen($_POST["apellido"]) <=10) {
					
					echo "Apellido: ".$_POST["apellido"];
					echo "<br>";	

				}else{

					echo "#Apellido# Ingrese mas de 5 caracteres y menos de 10";

				}
			}else{
				
				echo "#Apellido# Utiliza caracteres validos";

			}
		
		}elseif ($_POST["apellido"] !== null){
			
			echo "#Apellido# No se ingreso ningun apellido";
			echo "<br>";

		}

		//Validacion DNI

		if(isset($_POST["dni"]) && $_POST["dni"] !== "" ){
			
			if(soloNumeros($_POST["dni"])){
				
				if (strlen($_POST["dni"])== 8) {
					
					echo "DNI: ".$_POST["dni"];
					echo "<br>";	

				}else{

					echo "#DNI# Debe ingresar 8 numeros";

				}
			}else{
				
				echo "#DNI# Utiliza caracteres validos";

			}
		
		}elseif ($_POST["dni"] !== null){
			
			echo "#DNI# No se ingreso ningun DNI";
			echo "<br>";

		}

		//Validacion Email

		if(isset($_POST["email"]) && $_POST["email"] !== "" ){
			
			if(comprobar_Email($_POST["email"])){
				
				echo "Email: ".$_POST["email"];
				echo "<br>";	

			}else{
				
				echo "#Email# Ingresa un email valido";

			}
		
		}elseif ($_POST["email"] !== null){
			
			echo "#Email# No se ingreso ningun Email";
			echo "<br>";

		}

		//Sexo

		if(isset($_POST["sexo"])){
			
			echo "Sexo: ".$_POST["sexo"];
			echo "<br>";

		}else{

			echo "#Sexo# Seleccione un tipo de sexo";
			echo "<br>";

		}	

		//Fecha de nacimiento

		if(isset($_POST["nacimiento"]) && $_POST["nacimiento"] !== "" ){
			
			if(validacionFecha($_POST["nacimiento"]) == true){
				echo "Fecha de nacimiento: ".$_POST["nacimiento"];
				echo "<br>";
			}else{

				echo "#Fecha de nacimiento# Ingrese una fecha de nacimiento valida dd/mm/yyyy";
				echo "<br>";

			}
		}elseif($_POST["nacimiento"] !== null ){

			echo "#Fecha de nacimiento# No se ingreso ninguna fecha de nacimiento";
			echo "<br>";

		}	

		//Documentacion Presentada

				
			echo "Documentacion presentada: <br>" ;

			if(isset($_POST["documentacionPres"]))
			foreach ($_POST["documentacionPres"] as $var) {
				echo $var."<br>";
				}
			else{
				echo "Ninguna";
				echo "<br>";

			}
		
		//Funcion para solo letras
		function soloLetras($nombre = NULL) {
   		$validos="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
        $validez=1;
        for ($i=0;$i<=strlen($nombre)-1;$i++) {
            if (strpos($validos,substr($nombre,$i,1))===false) {
            	$validez=0;
            }
        }
        return $validez;
		} 

		//Funcion para solo numeros
		function soloNumeros($numero = NULL) {
   		$validos="0123456789";
        $validez=1;
        for ($i=0;$i<=strlen($numero)-1;$i++) {
            if (strpos($validos,substr($numero,$i,1))===false) {
            	$validez=0;
            }
        }
        return $validez;
		}   

		//Validacion de email
		function comprobar_Email($email){
  		  $mail_correcto = 0;
    		//compruebo unas cosas primeras
    		if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
       			if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
          		//miro si tiene caracter .
          			if (substr_count($email,".")>= 1){
             			//obtengo la terminacion del dominio
             			$term_dom = substr(strrchr ($email, '.'),1);
             			//compruebo que la terminación del dominio sea correcta
             			if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
                			//compruebo que lo de antes del dominio sea correcto
                			$antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
                			$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
                			if ($caracter_ult != "@" && $caracter_ult != "."){
                   				$mail_correcto = 1;
                			}
             			}
          			}
       			}
    		}
    		if ($mail_correcto){
       			return 1;
    		}else{
       			return 0;
   			}
		} 


		function validacionFecha($date, $format = 'd/m/Y'){
    	
    	$d = DateTime::createFromFormat($format, $date);
    	return $d && $d->format($format) == $date;
		
		}


		?>


</body>
</html>