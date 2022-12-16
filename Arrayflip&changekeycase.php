<?php
$a=[
    "SRINJON"=>21,
    "Jon"=>26,
    "Aryan"=>35
];
$newarr=array_flip($a);
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_change_key_case($a,CASE_UPPER);
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_change_key_case($a,CASE_LOWER);
echo "<pre>";
print_r($newarr);
echo "</pre>";