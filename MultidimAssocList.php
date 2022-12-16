<?php
$marks = [
    ["name" => "Jon", "physics" => 81, "chemistry" => 87, "math" => 78],
    ["name" => "Srinjon", "physics" => 86, "chemistry" => 60, "math" => 84],
    ["name" => "Aryan", "physics" => 98, "chemistry" => 85, "math" => 79],
];
echo "<table border='2px' cellpadding='5px'>";
echo "<tr>
<th>Stu Name.</th>
<th>Physics</th>
<th>Chemistry</th>
<th>Math</th>
</tr>
";
foreach ($marks as list("name" => $name, "physics" => $physics, "chemistry" => $chemistry, "math" => $math)) {
    echo "<tr>";
    echo "<td>$name</td><td>$physics</td><td>$chemistry</td><td>$math</td>";
    echo "<br>";
    echo "</tr>";
}
