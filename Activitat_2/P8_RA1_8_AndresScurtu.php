<?php
$a = 10;
$b = 20;

echo "Abans: a = $a, b = $b<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "Després: a = $a, b = $b";
?>
