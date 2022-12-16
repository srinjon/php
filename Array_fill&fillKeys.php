<?php
$a=["a","b","c","d","e"];
$newarr=array_fill_keys($a,"Testing");
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_fill(3,4,"Testing");
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_fill(-3,4,"Testing");
echo "<pre>";
print_r($newarr);
echo "</pre>";