<?php
// $a=array(10,20,30,"Cat",12.50);
$a=[10,20,30,"Cat",12.50];

// foreach($a as $values){
//     echo $values ."<br>";
// }
// echo "<pre>";
// print_r($a);
// echo "</pre>";
$colors[0]="red";
$colors[1]="green";
$colors[2]="yellow";
$colors[3]="blue";
echo "<pre>";
print_r($colors);
echo "</pre><br>";
echo "<ul>";
for($i=0;$i<5;$i++)
{
echo "<li> $a[$i] </li>";
}
echo "</ul>";
?>