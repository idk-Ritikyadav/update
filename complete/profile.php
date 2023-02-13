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
    include('profile-script.php');

    
    ?>
    <h1>Signin</h1>
<nav>
<li><a href="./register.php"> Register</a></li>
<li><a href="./signin.php">Signin</a></li>
<li><a href="./profile.php">Profile</a></li>
<li><a href="./modify.php">Modify</a></li>
<li><a href="./info-form.php">Info</a></li></nav>

<?php session_start(); ?>
<?php echo "Name: "; ?>
<?php echo $_SESSION['name']; ?>
<br>

<?php echo "Username: "; ?>
<?php echo $_SESSION['username']; ?>
<br>

<?php echo "Address: "; ?>
<?php echo $_SESSION['address']; ?>
<br>

<?php echo "Shift: "; ?>
<?php echo $_SESSION['shift']; ?>
<br>

<?php echo "Stream: "; ?>
<?php echo $_SESSION['stream']; ?>
<br>

<?php echo "Phone Number: "; ?>
<?php echo $_SESSION['phone']; ?>
<br>

<?php echo "Year: "; ?>
<?php echo $_SESSION['year']; ?>
<br>
<a href="modify.php?id=" .";><button >Modify</button>
</a>
<button>Logout</button>





</body>
</html>