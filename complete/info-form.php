<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study</title>
    <style>*{text-align: center;} a{text-decoration: none; font-size: 2rem;}li{display: inline-block;margin: 1rem;text-align: center;}</style>
</head>
<body>
<?php include('info-script.php'); ?>

    <h1>Information</h1>
<nav>
<li><a href="./register.php"> Register</a></li>
<li><a href="./signin.php">Signin</a></li>
<li><a href="./profile.php">Profile</a></li>
<li><a href="./modify.php">Modify</a></li>
<li><a href="./info-form.php">Info</a></li></nav>

<form action="" method="post">

<label for="name"></label>
<input type="text" name="name" id="name" placeholder="Enter name">

<label for="phone"></label>
<input type="text" name="phone" id="phone" placeholder="Enter phone No">

<label for="address"></label>
<input type="text" name="address" id="address" placeholder="Enter address">

<label for="stream"></label>
<input type="text" name="stream" id="stream" placeholder="Enter stream">

<label for="shift"></label>
<input type="text" name="shift" id="shift" placeholder="Enter shift">

<label for="year"></label>
<input type="text" name="year" id="year" placeholder="Enter your admission year">

<input type="submit" value="submit" >

</form>



</body>
</html>