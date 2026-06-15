<?php
session_start();

if(isset($_POST['Post'])){
    $_SESSION['postData'] = $_POST;
    header("Location: piw.php"); 
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
    margin-right: 10px;
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

<form>
First Name:<br>
<input type="text" name="fname"><br>

Middle Name:<br>
<input type="text" name="mname"><br>

Last Name:<br>
<input type="text" name="lname"><br>

Date of Birth:<br>
<input type="text" name="dob"><br>

Address:<br>
<input type="text" name="address"><br><br>

<button type="submit" name="Get" formmethod="get">Submit GET</button>
<button type="submit" name="Post" formmethod="post">Submit POST</button>

</form>

<hr>

<?php
if(isset($_SESSION['postData'])){
    $_POST = $_SESSION['postData'];

    echo "<h3>POST Output:</h3>";
    echo "First Name: ".$_POST['fname']."<br>";
    echo "Middle Name: ".$_POST['mname']."<br>";
    echo "Last Name: ".$_POST['lname']."<br>";
    echo "Date of Birth: ".$_POST['dob']."<br>";
    echo "Address: ".$_POST['address']."<br>";

    unset($_SESSION['postData']);
}

else if(isset($_GET['Get'])){
    echo "<h3>GET Output:</h3>";
    echo "First Name: ".$_GET['fname']."<br>";
    echo "Middle Name: ".$_GET['mname']."<br>";
    echo "Last Name: ".$_GET['lname']."<br>";
    echo "Date of Birth: ".$_GET['dob']."<br>";
    echo "Address: ".$_GET['address']."<br>";
}
?>

</div>

</body>
</html>