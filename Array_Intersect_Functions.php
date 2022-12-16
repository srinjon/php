<?php
function compare($a,$b){
      if($a===$b){
        return 0;
      }
      return ($a > $b)? 1 : -1;
}
function compareValue($a,$b){
    if($a===$b){
      return 0;
    }
    return ($a > $b)? 1 : -1;
}
$fruit = ['a'=>'Orange','b'=>'Banana','c'=>'Apple','d'=>'Grape'];
$food = ['a'=>'Orange','c'=>'Rice','d'=>'Apple'];
$food1 = ['a'=>'Orange','b'=>'Rice','c'=>'Apples'];
$newarr=array_intersect($fruit,$food,$food1);//matching the vaule
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_intersect_key($fruit,$food,$food1);//matching keys
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_intersect_assoc($fruit,$food,$food1);//matching key and value
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_intersect_uassoc($fruit,$food,"compare");
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_intersect_uassoc($fruit,$food,"strcasecmp");
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_uintersect_assoc($fruit,$food,"compare");
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_intersect_ukey($fruit,$food,"compare");
/**
 * Compare two arrays key after comapring it returns only 1st arrays value.
 */
echo "<pre>";
print_r($newarr);
echo "</pre>";
$newarr=array_uintersect_uassoc($fruit,$food,"compare","compareValue");
/**
 * 1st function compare key part and 2nd function compare array value part.
 */
echo "<pre>";
print_r($newarr);
echo "</pre>";