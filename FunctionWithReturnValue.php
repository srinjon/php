<?php
// function hello($fname,$lname){
//     $v="$fname $lname";
//     return $v;
// }
// $name=hello("Srinjon","Sadhukhan");
// echo "Hello $name";
function result($math,$phy,$chem){
    $total = $math+$phy+$chem;
    return $total;
}
function percentage($total){
   $percent = ($total/3);
   return $percent;
}

$totals= result(74,85,68);
echo "Your result is: " .$totals. "<br>";
$percents=percentage($totals);
echo $percents ."%";

?>