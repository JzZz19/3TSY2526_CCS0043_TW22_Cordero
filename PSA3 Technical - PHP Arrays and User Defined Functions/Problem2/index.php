<!DOCTYPE html>
<html>
<head>
    <title>Array</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
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

<h2 style="text-align:center;">Array</h2>

<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];

$sum = 0;
foreach($numbers as $n){
    $sum += $n;
}

$sub = $numbers[0];
for($i=1; $i<count($numbers); $i++){
    $sub -= $numbers[$i];
}

$product = 1;
foreach($numbers as $n){
    $product *= $n;
}

$div = $numbers[0];
for($i=1; $i<count($numbers); $i++){
    $div /= $numbers[$i];
}
?>

<table>
<tr>
    <th colspan="2">Array List: <?php echo implode(", ", $numbers); ?></th>
</tr>
<tr>
    <td>Addition</td>
    <td><?php echo $sum; ?></td>
</tr>
<tr>
    <td>Subtraction</td>
    <td><?php echo $sub; ?></td>
</tr>
<tr>
    <td>Multiplication</td>
    <td><?php echo $product; ?></td>
</tr>
<tr>
    <td>Division</td>
    <td><?php echo $div; ?></td>
</tr>
</table>

</body>
</html>
