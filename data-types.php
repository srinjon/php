<?php
//data-types in php
$x = "Srinjon Sadhukhan<br>";//String
echo $x;
var_dump($x);
$x= 2500;//Int
var_dump($x);
echo "<br>";
$x= "2500";//String
var_dump($x);
echo "<br>";
$x= true;//Boolean
echo $x;
var_dump($x);
echo "<br>";
$x= false;
echo $x;
var_dump($x);
echo "<br>";
$x=array("html","css","js");//Array
foreach($x as $values)
{
echo "$values <br>";
}
var_dump($x);
echo "<br>";
$x=null;
var_dump($x);
?>