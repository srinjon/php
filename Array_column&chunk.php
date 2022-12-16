<?php
$marks = [
    ["id"=>100,"name" => "Jon", "physics" => 81, "chemistry" => 87, "math" => 78],
    ["id"=>101,"name" => "Srinjon", "physics" => 86, "chemistry" => 60, "math" => 84],
    ["id"=>102,"name" => "Aryan", "physics" => 98, "chemistry" => 85, "math" => 79],
];
$newarr=array_column($marks,'name');
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_column($marks,'name','id');
echo "<pre>";
print_r($newarr);
echo "</pre>";
$fruit = ['Orange','Banana','Apple','Grape','Guava','Potato'];
$newarr=array_chunk($fruit,3,true);
echo "<pre>";
print_r($newarr);
echo "</pre>";
//Preserve keys shows original keys of that array