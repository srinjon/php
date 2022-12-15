<?php
//passing arguments by value
function wow($a)
{
    $a=",how are you";
}
$str="Hello";
wow($str);
echo $str;
echo "<br>";
//Passing arguments by reference
function wow1(&$a)
{
    $a .=",how are you";
}
$str="Hello";
wow1($str);
echo $str;
echo "<br>";
function first($num){
    $num +=5;
}
function second(&$num){
    $num +=7;
    // return $num;
}
$number=10;
first($number);
echo "Original value is $number";
echo "<br>";
second($number);
echo "Original value is $number";
?>