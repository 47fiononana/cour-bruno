<?php 
$a = [1,2,3,4];
$b = [1,3,3,4];
for ($i=0; $i < max(sizeof($a),sizeof($b)) ; $i++) { 
	$somme = $a[$i] + $b[$i];
	echo $somme;
}


 ?>