<?php
$emp = [
    [1,"Jon","Manager",54000],
    [2,"Ron","Developer",50000],
    [3,"Aryan","Sales",45000],
    [4,"Ritwik","Tester",40000]
];
// for($row=0;$row<4;$row++)
// {
//     for($column=0;$column<4;$column++)
//     {
//         echo "<td>";
//         echo $emp[$row][$column] ." ";
//         echo "</td>";
       
//     }
//     echo "<br>";
// }
echo "<table border='2px' cellpadding='5px'>";
echo "<tr>
<th>Emp Id.</th>
<th>Emp Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>
";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2)
    {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<pre>";
print_r($emp);
echo "</pre>";
echo "<br>"; 

// echo $emp[1][2];

?>