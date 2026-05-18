<!DOCTYPE html>
<html>
<head>
    <title>BIOGRAPHY</title>
    <style>
        body { font-family: Arial; }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        img {
            width: 80px;
            height: 80px;
            border-radius: 50%; 
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">BIOGRAPHY</h2>

<?php
$people = [
    ["name"=>"LISING, ROMAR PAULO", "image"=>"P1.jpg", "age"=>20, "birthday"=>"July 24, 2006", "contact"=>"09198861738"],
    ["name"=>"DE GUIA, JONASH AARON", "image"=>"P2.jpg", "age"=>20, "birthday"=>"December 13, 2005", "contact"=>"0924766898"],
    ["name"=>"ALBA, AERICK LEE", "image"=>"P3.jpg", "age"=>20, "birthday"=>"August 22, 2005", "contact"=>"09472668154"],
    ["name"=>"REYES, RAILEY", "image"=>"P4.jpg", "age"=>20, "birthday"=>"June 15, 2005", "contact"=>"09261794726"],
    ["name"=>"RAMIREZ, MARCUS DYLAN", "image"=>"P5.jpg", "age"=>20, "birthday"=>"May 5, 2005", "contact"=>"0955589732"],
    ["name"=>"CALLEJA, JOSEPH ", "image"=>"P6.jpg", "age"=>30, "birthday"=>"June 6, 1995", "contact"=>"09589261738"],
    ["name"=>"DE JESUS, ANDREW", "image"=>"P7.jpg", "age"=>20, "birthday"=>"July 7, 2005", "contact"=>"091827861738"],
    ["name"=>"COSTINAR, JOHN KENNETH", "image"=>"P8.jpg", "age"=>19, "birthday"=>"August 8, 2006", "contact"=>"09213123456"],
    ["name"=>"REYES, JOHN GABRIEL", "image"=>"P9.jpg", "age"=>20, "birthday"=>"September 9, 2005", "contact"=>"09215843726"],
    ["name"=>"SIANGIO, ALFREDO JOSE JR", "image"=>"P10.jpg", "age"=>22, "birthday"=>"October 10, 2003", "contact"=>"092313281738"]
];

usort($people, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});
?>
<table>
<tr>
    <th>no.</th>
    <th>name</th>
    <th>Image</th>
    <th>age</th>
    <th>birthday</th>
    <th>contact number</th>
</tr>

<?php
$i = 1;
foreach($people as $p) {
    echo "<tr>";
    echo "<td>".$i++."</td>";
    echo "<td>".$p["name"]."</td>";

    echo "<td><img src='".$p["image"]."'></td>";

    echo "<td>".$p["age"]."</td>";
    echo "<td>".$p["birthday"]."</td>";
    echo "<td>".$p["contact"]."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>