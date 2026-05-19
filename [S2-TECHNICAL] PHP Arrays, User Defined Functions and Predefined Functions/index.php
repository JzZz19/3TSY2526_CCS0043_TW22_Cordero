
<?php
$fruits = array(
    "Apple" => array("apple.jpg", "Color Red", "Apples are rich in fiber."),
    "Banana" => array("banana.jpg", "Color Yellow", "Bananas give energy."),
    "Cherry" => array("cherry.jpg", "Color Red", "Cherries are sweet fruits."),
    "Grapes" => array("grapes.jpg", "Color Purple", "Grapes can be eaten fresh."),
    "Mango" => array("mango.jpg", "Color Orange", "Mango is the national fruit."),
    "Orange" => array("orange.jpg", "Color Orange", "Oranges are rich in Vitamin C."),
    "Papaya" => array("papaya.png", "Color Orange", "Papaya helps digestion."),
    "Pineapple" => array("pineapple.jpg", "Color Yellow", "Pineapple is juicy."),
    "Strawberry" => array("strawberry.jpg", "Color Red", "Strawberries are sweet."),
    "Watermelon" => array("watermelon.jpg", "Color Green", "Watermelon is refreshing.")
);

ksort($fruits);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>

    <style>
        body {
            font-family: Arial;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }

        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>

<h2>My Fruits</h2>

<table>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
    </tr>

    <?php
    foreach ($fruits as $name => $info) {
        echo "<tr>";

        echo "<td><img src='".$info[0]."' alt='".$name."'></td>";

        echo "<td>".$name."</td>";
        echo "<td>".$info[1]."</td>";
        echo "<td>".$info[2]."</td>";

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
