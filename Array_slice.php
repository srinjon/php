<?php
// $fruit = ['Orange', 'Banana', 'Apple', 'Grape'];
$fruit = ['a'=>'Orange', 'b'=>'Banana', '42'=>'Apple', 'd'=>'Grape'];
// $slice=array_slice($fruit,1,3);
// $slice = array_slice($fruit, -2, 1, true);
$slice = array_slice($fruit, 1, 3,true);

echo "<pre>";
print_r($slice);
echo "</pre>";
