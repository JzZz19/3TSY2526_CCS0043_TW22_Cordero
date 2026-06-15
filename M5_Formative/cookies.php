<?php
if(isset($_POST['Submit'])){
    setcookie("fname", $_POST['fname'], time()+60);
    setcookie("mname", $_POST['mname'], time()+60);
    setcookie("lname", $_POST['lname'], time()+60);

    setcookie("start", time(), time()+60);

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

<html>
<head>
<style>
body {
    font-family: Arial;
    background-color: #f2f2f2;
}

.container {
    width: 400px;
    margin: auto;
    padding: 20px;
    background: white;
    border-radius: 10px;
}

input[type=text] {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

button {
    padding: 8px 10px;
    background-color: #c23742;
    color: white;
    border: none;
}

h2 {
    text-align: center;
}
</style>
</head>

<body>

<div class="container">

<h2>Personal Information</h2>

<form method="post">
First Name:<br>
<input type="text" name="fname"><br>

Middle Name:<br>
<input type="text" name="mname"><br>

Last Name:<br>
<input type="text" name="lname"><br><br>

<button type="submit" name="Submit">Save to Cookies</button>
</form>

<hr>

<h3>Stored Data (Cookies):</h3>

<?php
if(isset($_COOKIE['start'])){
    $start = $_COOKIE['start'];
    $now = time();

    if(($now - $start) >= 10 && isset($_COOKIE['fname'])){
        echo "First Name: ".$_COOKIE['fname']."<br>";
    }

    if(($now - $start) >= 20 && isset($_COOKIE['mname'])){
        echo "Middle Name: ".$_COOKIE['mname']."<br>";
    }

    if(($now - $start) >= 30 && isset($_COOKIE['lname'])){
        echo "Last Name: ".$_COOKIE['lname']."<br>";
    }
}
?>

<p><small>Click Save → wait → refresh page.</small></p>

</div>

</body>
</html>