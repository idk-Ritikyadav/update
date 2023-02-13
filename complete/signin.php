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
    <?php 
    include('connection.php');
    include('signin-script.php');

    
    ?>
    <h1>Signin</h1>
<nav>
<li><a href="./register.php"> Register</a></li>
<li><a href="./signin.php">Signin</a></li>
<li><a href="./profile.php">Profile</a></li>
<li><a href="./modify.php">Modify</a></li>
<li><a href="./info-form.php">Info</a></li></nav>


<form action="" method="post">
    <label for="username"></label>
    <input type="text" name="username" id="username">
    <label for="password"></label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Signin">
</form>


</body>
</html>