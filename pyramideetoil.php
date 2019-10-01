<!DOCTYPE html>
<html>
<head>
	<title>pyramide *</title>
</head>
<body>
	<form action="pyramideetoil.php" method="Post">
		<input type="number" name="nbr">
		<input type="submit" name="btn">
	</form>

</body>
</html>


<?php 
$a = $_POST['nbr'];
for ($i=0; $i <=$a ; $i++) { 
	$etoil = str_repeat('* ', ($i - 1) * 1 + 1);
	$espace = str_repeat(' ', $a - $i);
	echo $espace .' ' .$etoil. ' <br />';
	echo "<pre />";
}

 ?>