<?php
function compare($a,$b){
if($a === $b){
    return 0;
}
return ($a>$b)? 1:-1;
}
function compareValue($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a>$b)? 1:-1;
    }
$fruit = ['a'=>'Orange','b'=>'Banana','c'=>'Apple','d'=>'Grape'];
$food = ['a'=>'Orange','c'=>'Rice','e'=>'Apple'];
$food1 = ['a'=>'Orange','b'=>'Rice','c'=>'Apples'];
$differece=array_diff($fruit,$food,$food1);
echo "<pre>";
print_r($differece);
echo "</pre>";
$differece=array_diff_key($fruit,$food,$food1);
echo "<pre>";
print_r($differece);
echo "</pre>";
$differece=array_diff_assoc($fruit,$food,$food1);
echo "<pre>";
print_r($differece);
echo "</pre>";
$differece=array_diff_uassoc($fruit,$food,"compare");
echo "<pre>";
print_r($differece);
echo "</pre>";
$differece=array_diff_ukey($fruit,$food,"compare");
echo "<pre>";
print_r($differece);
echo "</pre>";
$differece=array_udiff($fruit,$food,"compare");
echo "<pre>";
print_r($differece);
echo "</pre>";
$differece=array_udiff_uassoc($fruit,$food,"compare","compareValue");
echo "<pre>";
print_r($differece);
echo "</pre>";