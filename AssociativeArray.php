<?php
$age = [
    //Key=Value
    "Jon"=>25,
    "Ron"=>27,
    "Ankit"=>"23",
    "Aryan"=>28
];
$age["Aryan"]=26;
function breaks(){
    echo "<br>";
}
echo $age["Ankit"];
breaks();
echo $age["Jon"];
breaks();
echo $age["Aryan"];
breaks();
echo "<pre>";
print_r($age);
echo "</pre>";
breaks();
echo "<pre>";
var_dump($age);
echo "</pre>";
?>