<?php
//define(name,value,case-insensitive)
// at constant variable we don't need to write any $ sign.
// We cannot reassign the constant variable we need to change variable name.
define("test",50,TRUE);
// define("test",10);
define("_test",50);
echo test;
echo "<br>";
echo _test;
echo "<br>";
$sum= test + 20;
echo $sum;
echo "<br>";
// echo Test;s
?>