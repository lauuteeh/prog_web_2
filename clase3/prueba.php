<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	
	if(isset($_GET["usuario"]) && $_GET["usuario"] !== "" && isset($_GET["pass"]) && $_GET["pass"] !== ""){
		echo $_GET["usuario"];
		echo "<br>";
		echo $_GET["pass"];

	}
	elseif ($_GET["usuario"] !== null && $_GET["pass"] !== null){
		echo "Hubo un error";
	}

?>


</body>
</html>