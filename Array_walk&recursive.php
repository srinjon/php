<?php
$a=[
    "SRINJON"=>21,
    "Jon"=>26,
    "Aryan"=>35
];
$newarr=array_walk($a,"myfunction","is a key of");
function myfunction($value, $key, $param){
    echo "$key $param $value<br>";

}