<!DOCTYPE html>
<html>
<head>
	<title>pyramide</title>
</head>
<body>
	<form action="pyramide1.php" method="Post">
		<input type="number" name="numb" placeholder="entre un nombre">
		<input type="submit" name="btn">
	</form>
</body>
</html>



<?php 
$a = $_POST['numb'];
for ($i=0; $i<=$a; $i++) { 
	for ($j=1; $j<=$i ; $j++) { 
		echo $j;
	}
	echo "<br/>";
}

 ?>
