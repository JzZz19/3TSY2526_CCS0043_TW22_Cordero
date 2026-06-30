<?php
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: home.php");
    exit();
}

$staticUsername = "user123";
$staticPassword = "12345";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    if ($username == $staticUsername && $password == $staticPassword) {
        $_SESSION['logged'] = true;
        $_SESSION['username'] = $username;

        if ($remember) {
            setcookie("username", $username, time() + 3600 * 24 * 7);
            setcookie("password", $password, time() + 3600 * 24 * 7);
        }

        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}

$savedUsername = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
$savedPassword = isset($_COOKIE['password']) ? $_COOKIE['password'] : "";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box">
    <h2>Login</h2>
    <?php if ($error) echo "<p class='error'>$error</p>"; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $savedUsername; ?>">
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $savedPassword; ?>">
        <label><input type="checkbox" name="remember" <?php if ($savedUsername) echo "checked"; ?>> Remember Me</label>
        <input type="submit" value="Submit">
    </form>
    <p><a href="register.php">Click here to register</a></p>
</div>
</body>
</html>