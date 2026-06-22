<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Reset Password</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>
<input type="text" name="password" placeholder="New Password" required>

<button name="reset">Reset</button>

</form>

</div>

<?php
if (isset($_POST['reset'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "UPDATE users SET password='$pass' WHERE username='$user'";

    $conn->query($sql);
}
?>

</body>
</html>