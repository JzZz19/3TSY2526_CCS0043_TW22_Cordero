<?php
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: home.php");
    exit();
}

$error = "";
$showResult = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['first_name'];
    $middle = $_POST['middle_name'];
    $last = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact_number'];

    if ($password !== $confirm) {
        $error = "password and confirm password are not the same";
    } else {
        $showResult = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box box-wide">
    <h2>My Personal Information</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>First Name</label>
        <input type="text" name="first_name">
        <label>Middle Name</label>
        <input type="text" name="middle_name">
        <label>Last Name</label>
        <input type="text" name="last_name">
        <label>Username</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="password" name="password">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password">
        <label>Birthday</label>
        <input type="date" name="birthday">
        <label>Email</label>
        <input type="email" name="email">
        <label>Contact Number</label>
        <input type="text" name="contact_number">
        <input type="submit" value="Submit">
    </form>

    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php elseif ($showResult): ?>
        <div class="result">
            Full Name: <?php echo "$first $middle $last"; ?><br>
            Username: <?php echo $username; ?><br>
            Password: <?php echo $password; ?><br>
            Birthday: <?php echo $birthday; ?><br>
            Email: <?php echo $email; ?><br>
            Contact Number: <?php echo $contact; ?>
        </div>
        <p><a href="login.php">Click here to login</a></p>
    <?php endif; ?>
</div>
</body>
</html>