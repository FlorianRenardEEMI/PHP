<?php
$a = 1;
$b = 2;
$c = 3;

echo $a;
echo $b;
echo $c;

$temp =$a;
$a = $b;
$b = $c;
$c = $temp;

echo $a;
echo $b;
echo $c;

?>