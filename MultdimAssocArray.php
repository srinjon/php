<?php
$marks = [
    "Jon" => ["physics" => 81, "chemistry" => 87, "math" => 78],
    "Srinjon" => ["physics" => 86, "chemistry" => 60, "math" => 84],
    "Aryan" => ["physics" => 98, "chemistry" => 85, "math" => 79],
];
echo "<table border='2px' cellpadding='5px'>";
echo "<tr>
<th>Stu Name.</th>
<th>Physics</th>
<th>Chemistry</th>
<th>Math</th>
</tr>
";
foreach ($marks as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    foreach ($value as $values) {
        echo "<td>$values</td>";
    }
    echo "<br>";
    echo "</tr>";
}
echo "</table>";
echo "<pre>";
print_r($marks);
echo "</pre>";
