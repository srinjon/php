<?php
// $fruit = ['Orange','Banana',1=>'Apple'];
$fruit = ['Orange','Banana','Apple','Grape'];
$food = ['Rice','Daal'];
$color=['Orange','Yellow','Red'];
$new_arr=array_replace($fruit,$food,$color);
echo "<pre>";
print_r($new_arr);
echo "</pre>";
$fruit = ['Orange','Banana','Apple','Grape'];
$food = ['a'=>'Rice',1=>'Daal'];
$new_arr=array_replace($fruit,$food);
echo "<pre>";
print_r($new_arr);
echo "</pre>";
$fruit = ["a"=>['Orange','Banana'],"b"=>['Apple','Grape']];
$food = ["a"=>['Rice'],"b"=>['Daal']];
$new_arr=array_replace_recursive($fruit,$food);
echo "<pre>";
print_r($new_arr);
echo "</pre>";