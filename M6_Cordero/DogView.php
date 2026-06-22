<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog View</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center;">Dog View</h2>

<table>
<tr>
<th>Name</th>
<th>Breed</th>
<th>Age</th>
<th>Address</th>
<th>Color</th>
<th>Height</th>
<th>Weight</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM dog");

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Breed']."</td>";
    echo "<td>".$row['Age']."</td>";
    echo "<td>".$row['Address']."</td>";
    echo "<td>".$row['Color']."</td>";
    echo "<td>".$row['Height']."</td>";
    echo "<td>".$row['Weight']."</td>";
    echo "</tr>";
}
?>

</table>

<br>
<center><a href="DogRegister.php">Back</a></center>

</body>
</html>