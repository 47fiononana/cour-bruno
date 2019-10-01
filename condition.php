<!DOCTYPE html>
<html>
<head>
	<title>condition</title>
</head>
<body>
	<form 	action="condition.php" method="Post">
		<input type="number" name="nbr">
		<input type="submit" name="btn">
	</form>

</body>
</html>
<?php 
$nbr = $_POST['nbr'];
if ($nbr<0) {
	echo "le nombre est inferieur à 0";
}
elseif ($nbr>0) {
	echo "le nombre est superieur à 0";
}
else {
	echo "le nombre est egal à 0";
}


 ?>