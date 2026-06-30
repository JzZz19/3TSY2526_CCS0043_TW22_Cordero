<?php
session_start();
require "db.php";

if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header("Location: login.php");
    exit();
}

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current = $_POST['current_password'];
    $new = $_POST['new_password'];
    $reenter = $_POST['reenter_password'];

    $userId = $_SESSION['user_id'];
    $sql = "SELECT password FROM users WHERE id = '$userId'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (md5($current) !== $row['password']) {
        $error = "Current password is not the same with the old password";
    } elseif ($new !== $reenter) {
        $error = "New password and Re-Enter new password should be the same.";
    } else {
        $newHashed = md5($new);
        mysqli_query($conn, "UPDATE users SET password = '$newHashed' WHERE id = '$userId'");
        $success = "Password updated successfully!";
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
    <h2>User Information Form
        <a href="logout.php" style="float:right;font-size:14px;">Log-out</a>
    </h2>

    <p><strong>Welcome</strong> <?php echo $_SESSION['full_name']; ?></p>
    <p><strong>Birthday:</strong> <?php echo $_SESSION['birthday']; ?></p>
    <p><strong>Contact Details</strong></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <p>Contact: <?php echo $_SESSION['contact_number']; ?></p>

    <hr>
    <h3>Reset Password</h3>

    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php elseif ($success): ?>
        <p style="color:green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Enter Current Password</label>
        <input type="password" name="current_password">
        <label>Enter New Password</label>
        <input type="password" name="new_password">
        <label>Re-Enter New Password</label>
        <input type="password" name="reenter_password">
        <input type="submit" value="Reset Password">
    </form>
</div>
</body>
</html>