<?php
$sayhello=function($name){echo "Hello $name";};$sayhello("Srinjon");
$sayhello=function($a,$b) 
{
    $c=$a+$b;
    echo"Hello $c";
};
$sayhello(8,9);
//At this time sayhello variable act as a function
