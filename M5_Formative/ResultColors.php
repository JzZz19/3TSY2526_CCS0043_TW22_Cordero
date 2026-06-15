<?php
session_start();
?>

<html>
<head>
<style>
body {
    font-family: Arial;
    background-color: #f2f2f2;
}

.container {
    width: 450px;
    margin: auto;
    padding: 20px;
    background: white;
    border-radius: 10px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
}

.color-box {
    padding: 10px;
    margin: 5px 0;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}
</style>
</head>

<body>

<div class="container">

<h2>My Favorite Colors</h2>

<?php
echo "<div class='color-box' style='background:".$_SESSION['c1'].";'>My Favorite Color 1: ".$_SESSION['c1']."</div>";
echo "<div class='color-box' style='background:".$_SESSION['c2'].";'>My Favorite Color 2: ".$_SESSION['c2']."</div>";
echo "<div class='color-box' style='background:".$_SESSION['c3'].";'>My Favorite Color 3: ".$_SESSION['c3']."</div>";
echo "<div class='color-box' style='background:".$_SESSION['c4'].";'>My Favorite Color 4: ".$_SESSION['c4']."</div>";
echo "<div class='color-box' style='background:".$_SESSION['c5'].";'>My Favorite Color 5: ".$_SESSION['c5']."</div>";
?>

</div>

</body>
</html>
