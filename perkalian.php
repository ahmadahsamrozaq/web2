<?php 
$varX = 12;
$varG = 1;

for ($i=0; $i < 20; $i++) { 
	echo "$varX x $varG";
	echo " = ";
	echo $hasil= $varX * $varG;
	echo "<br>";

	$varG += 2;
}

?>