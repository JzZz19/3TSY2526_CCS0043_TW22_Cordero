<?php
session_start();
require "db.php";

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: home.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['logged'] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['full_name'] = $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'];
        $_SESSION['birthday'] = $row['birthday'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['contact_number'] = $row['contact_number'];

        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box">
    <h2>Log-In Form</h2>
    <?php if ($error) echo "<p class='error'>$error</p>"; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Username</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
    <p><a href="register.php">Click here to register</a></p>
</div>
</body>
</html>