<?php 
Function acak(){
$xx = "abcdefghijklmnopqrstuvwxyz0123456789";
$zz = strlen($xx) - 1;
return substr($xx, rand(0, $zz), 1);
}

$val = 7;
for ($a=0; $a < $val ; $a++) {
	for ($i = 0; $i < 8; $i++)
	echo acak();
	for ($i = 0; $i < 8; $i++)
	echo acak();
	for ($i = 0; $i < 8; $i++)
	echo acak();
	for ($i = 0; $i < 8; $i++)
	echo acak();
	echo "<br>";
}
?>