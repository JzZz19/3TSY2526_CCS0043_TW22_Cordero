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
}

h2 {
    text-align: center;
}

input[type=text] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}

button {
    padding: 10px;
    width: 100%;
    background-color: #c23742;
    color: white;
    border: none;
}

label {
    font-weight: bold;
}
</style>
</head>

<body>

<div class="container">

<h2>Enter your favorite colors</h2>

<form method="post">
<label>Favorite Color 1:</label>
<input type="text" name="c1">

<label>Favorite Color 2:</label>
<input type="text" name="c2">

<label>Favorite Color 3:</label>
<input type="text" name="c3">

<label>Favorite Color 4:</label>
<input type="text" name="c4">

<label>Favorite Color 5:</label>
<input type="text" name="c5">

<button type="submit">Send Colors</button>
</form>

<?php
if(isset($_POST['c1'])){
    $_SESSION['c1'] = $_POST['c1'];
    $_SESSION['c2'] = $_POST['c2'];
    $_SESSION['c3'] = $_POST['c3'];
    $_SESSION['c4'] = $_POST['c4'];
    $_SESSION['c5'] = $_POST['c5'];

    header("Location: ResultColors.php");
    exit();
}
?>

</div>

</body>
</html>