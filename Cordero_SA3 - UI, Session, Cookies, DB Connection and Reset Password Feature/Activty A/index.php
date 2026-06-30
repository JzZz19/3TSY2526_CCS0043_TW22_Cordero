<?php
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box">
    <h2>Welcome</h2>
    <p>Please login or register to continue.</p>
    <a href="login.php">Login</a> | <a href="register.php">Register</a>
</div>
</body>
</html>