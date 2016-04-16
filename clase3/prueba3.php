<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		//text
		if(isset($_GET["cajita"]) && $_GET["cajita"] !== ""){
			
			echo "Text: ".$_GET["cajita"];
			echo "<br>";
			
		}
		elseif ($_GET["cajita"] !== null){
			
			echo "Hubo un error en la caja 1 (Text)";
			echo "<br>";

		}

		//textarea
		if(isset($_GET["caja4"]) && $_GET["caja4"] !== ""){
			
			echo "Textarea: ".$_GET["caja4"];
			echo "<br>";

		}
		elseif ($_GET["caja4"] !== null){
			
			echo "Hubo un error en la caja 4 (TextArea)";
			echo "<br>";

		}
		
		//select
		if(isset($_GET["caja3"])){
			
			echo "Select :".$_GET["caja3"];
			echo "<br>";

		}

		//radio
		if(isset($_GET["caja2"])){
			
			echo "Radio:".$_GET["caja2"];
			echo "<br>";

		}

		//checkbox
		if(isset($_GET["caja"])){
				
				echo "checkbox:";

			foreach ($_GET["caja"] as $caja1) {
				echo $caja1."<br>";
				}

		}else{

			echo "hubo un error en la caja (CheckBox)";
			echo "<br>";

		}

		//selectmultiple

		if(isset($_GET["caja5"])){
				
				echo "Select Multiple:";
			
			foreach ($_GET["caja5"] as $caja2) {
				echo $caja2."<br>";
				}

		}else{

			echo "hubo un error en la caja5 (SelectMultiple)";
			echo "<br>";

		}		






	?>

</body>
</html>