<?php
function sum($a,$b){
    echo $a+$b ."<br>";
}
function sub($a,$b){
    echo $a-$b ."<br>";
}
function mul($a,$b){
    echo $a*$b ."<br>";
}
function div($a,$b){
    echo $a/$b ."<br>";
}
function mod($a,$b){
    echo $a%$b ."<br>";
}
function floop($a){
    for($a=1;$a<=10;$a++)
    {
        echo $a. "<br>";
    }
}
function condition($a){
    if($a>20){
        echo "True";
    }else{
        echo "False";
    }
}
function condition1($a,$b){
    if($a>$b){
        echo "Greater Value is: ". $a;
    }else
    {
        echo  "Greater Value is: ". $b;
    }
}
function hello($fname,$lname){
    echo "Hello $fname $lname.<br>";
}
// sum(10,20);
// sub(30,10);
// mul(5,10);
// div(20,5);
// mod(10,7);
// sum(20,8);
// floop(10);
// condition(25);
// condition1(10,25);
hello("Srinjon","Sadhukhan");
?>