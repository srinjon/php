<?php
$favcolor="Yellow";
switch($favcolor){
    case "red":
        echo "Your favourite color is ". $favcolor;
        break;
    case "Yellow":
        echo "Your favourite color is ". $favcolor;
        break;
    case "pink":
        echo "Your favourite color is ". $favcolor;
        break;
    default:
        echo "Other color is your favourite color";
        
}
echo "<br>";
$age = 28;
switch(true){
    case ($age>=15 and $age <21):
        echo "You are eligible";
        break;
    case ($age<15):
        echo "You are not eligible";
        break;
    default:
        echo "Enter the valid age.";
        break;



}
?>