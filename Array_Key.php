<?php
$fruit = ['a'=>'Orange','b'=>'Banana','c'=>'Apple','d'=>'Grape'];
$newArray = array_keys($fruit);
// $newArray = array_key_first($fruit);
// $newArray = array_key_last($fruit);
// $newArray=array_key_exists('b',$fruit);
$newArray=key_exists('c',$fruit);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";
if($newArray){
    echo "Key Exists";
}else{
    echo "Key doesn't exists";
}