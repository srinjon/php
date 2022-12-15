<?php
$x=10;
$y=5;
function variable(){
    global $x,$y;
    $y=$x+$y;
    echo $y;
    echo "<br>";
}
variable();
echo $y;
?>