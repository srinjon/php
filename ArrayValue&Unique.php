<?php
$fruit = ['a'=>'Orange','b'=>'Banana','c'=>'Apple','d'=>'Grape','e'=>'Banana'];
$newarr=array_values($fruit);
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_unique($fruit);
echo "<pre>";
print_r($newarr);
echo "</pre>";