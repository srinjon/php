<?php
$fruit = ['Orange','Banana','Apple','Grape'];
$food = ['Rice','Daal'];
$color=['Guava','Yellow','Red'];
$splice=array_splice($fruit,1,2,$color);
echo "<pre>";
print_r($fruit);
echo "</pre>";
// $splice=array_splice($fruit,1,-2,$color);
// $splice=array_splice($fruit,2,0,$color);
// echo "<pre>";
// print_r($fruit);
// echo "</pre>";
$splice=array_splice($fruit,count($fruit),0,$color);
echo "<pre>";
print_r($fruit);
echo "</pre>";