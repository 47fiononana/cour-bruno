<!DOCTYPE html>
<html>
<head>
	<title>somme de deux nombre</title>
</head>
<body>
<form action = sommes.php method = Post>
	<input type="number" name="nbr1">
	<input type="number" name="nbr2">
	<input type="submit" value="somme">
	
</form>
</body>
</html>
<?php 
$nbr1 = $_POST['nbr1'];
$nbr2 = $_POST['nbr2'];
$result = $nbr1 + $nbr2;
echo "la somme des deux nombre est" .$result;

 ?>