<?php
$a = [10, 20, 30, "Cat", 12.50];
// echo sizeof($a). " " .count($a);
// echo "<br>";
// $marks = [
//     ["name" => "Jon", "physics" => 81, "chemistry" => 87, "math" => 78],
//     ["name" => "Srinjon", "physics" => 86, "chemistry" => 60, "math" => 84],
//     ["name" => "Aryan", "physics" => 98, "chemistry" => 85, "math" => 79],
// ];
// echo sizeof($marks,1). " " .count($marks,1);
// echo "<br>";
$length = count($a);
for ($i = 0; $i < $length; $i++) {
    echo $a[$i] . "||";
}
echo "<br>";
echo "<pre>";
print_r(array_count_values($a));
echo "</pre>";
