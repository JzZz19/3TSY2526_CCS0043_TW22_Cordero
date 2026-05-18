<!DOCTYPE html>
<html>
<head>
    <title>User Defined Function</title>
    <style>
        table {
            border-collapse: collapse;
            width: 95%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">User Defined Function</h2>

<?php
function my_function($a, $b, $c) {

    $add = $a + $b + $c;
    $sub = $a - $b - $c;
    $mul = $a * $b * $c;
    $div = $a / $b / $c;

    echo "<table>";
    echo "<tr>";
    echo "<th colspan='2'>My Parameter values: $a, $b, $c</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Addition</td>";
    echo "<td>$add</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Subtraction</td>";
    echo "<td>$sub</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Multiplication</td>";
    echo "<td>$mul</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Division</td>";
    echo "<td>$div</td>";
    echo "</tr>";

    echo "</table>";
}

my_function(25, 13, 6);
?>

</body>
</html>