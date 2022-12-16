<?php
$food = ["Orange", "Grape", "Apple", "Banana",[20,25,60]];
// echo in_array('Grape',$food);
if (in_array([20,25,61],$food)) {
    echo "Find Successfully";
} else {
    echo "Sorry,Not find";
}
echo "<br>";
if (array_search('Apple',$food)) {
    echo "Find the key";
} else {
    echo "Sorry,Not find";
}
/*in_array:It find the value from an array
array_search:It search the key from an array
*/
