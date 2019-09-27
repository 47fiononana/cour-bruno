<!DOCTYPE html>
<html>
<head>
	<title>NomPrenom</title>
</head>
<body>
<form action = nomPre.php method = Post>
	<input type="text" name="nbr1" required>
	<input type="text" name="nbr2" required>
	<input type="submit" value="ajout">
	
</form>
</body>
</html>
<?php 
$nbr1 = $_POST['nbr1'];
$nbr2 = $_POST['nbr2'];

echo $nbr1. ' ' .$nbr2

 ?>