<?php
$x=14;
$y="14";
var_dump($x == $y);//Equal to
var_dump($x===$y);//Equal value and equal type
echo "<br>";
$x=14;
$y="30";
$z=14;
var_dump($x!=$y);//not equal
var_dump($x<>$y);//not equal
var_dump($x!==$y);//not equal value or not equal type
var_dump($x!==$z);//not equal value or not equal type
echo "<br>";

var_dump($x>$y);//greater than
var_dump($x<$y);//less than
var_dump($x<=$y);//less than or equal to
var_dump($x>=$y);//greater than or equal to
echo "<br>";
$a=14;
$b=15;
$c=14;
$d=13;
echo $a<=>$b;//less than spaceship operator
echo "<br>";
echo $a<=>$c;//equal to
echo "<br>";
echo $a<=>$d;//greater than
// true=1;false=empty string

?>