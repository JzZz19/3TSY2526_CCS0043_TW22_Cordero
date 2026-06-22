<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Dog</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<div class="container">

<h2>Register Dog</h2>

<form name="dogForm" method="POST" onsubmit="return validateForm()">

<input type="text" name="name" placeholder="Name" required>

<input type="text" name="breed" placeholder="Breed">

<select name="age" required>
    <option value="">Select Age</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    <option>13</option>
    <option>14</option>
    <option>15</option>
</select>

<input type="text" name="address" placeholder="Address">

<select name="color">
    <option value="">Select Color</option>
    <option>White</option>
    <option>Black</option>
    <option>Brown</option>
    <option>Golden</option>
</select>

<input type="text" name="height" placeholder="Height (cm)">
<input type="text" name="weight" placeholder="Weight (kg)">

<button type="submit" name="save">Save</button>

</form>

<br>
<a href="DogView.php">View Dogs</a>

</div>

<?php
if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dog (Name, Breed, Age, Address, Color, Height, Weight)
            VALUES ('$name','$breed','$age','$address','$color','$height','$weight')";

    $conn->query($sql);
}
?>

</body>
</html>