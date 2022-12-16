<?php
$emp = [
    [1,"Jon","Manager",54000],
    [2,"Ron","Developer",50000],
    [3,"Aryan","Sales",45000],
    [4,"Ritwik","Tester",40000]
];
echo "<table border='2px' cellpadding='5px'>";
echo "<tr>
<th>Emp Id.</th>
<th>Emp Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>
";
foreach($emp as list($a,$b,$c,$d)){
    echo "<tr>";
    echo "<td>$a</td><td>$b</td><td>$c</td><td>$d</td>";
    echo "<br>";
    echo "</tr>";
}
echo "</table.";
?>