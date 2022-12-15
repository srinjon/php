<?php
$x=15;
$y=20;
$z=25;
if($z>$x&&$z>$y){
    echo "This statement is true";
}else{
    echo "This statement is not true";
}
echo "<br>";
if($z<$x||$z>$y){
    echo "This statement is true";
}else{
    echo "This statement is not true ";
}
echo "<br>";
if ($z>$x xor $z>$y){
    echo "This statement is true";

}else{
    echo "This statement is not true";
}
//in xor true+true=false and false+false=false and rest of condition it is true
echo "<br>";
$age = 20;
if($age >=18 and $age<=21)
{
    echo "You are eligible";
}
echo "<br>";
if($age >=18 or $age<=21)
{
    echo "You are eligible";
}
if(!($age <=18))
{
    echo "You are eligible";
}
?>