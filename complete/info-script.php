<?php
include 'connection.php';
include('register-script.php');
session_start();
$username = $_SESSION['username'];


if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['stream']) && isset($_POST['shift']) && isset($_POST['year'])){
   global $name, $phone, $address, $stream, $shift, $year;
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $stream = $_POST['stream'];
    $shift = $_POST['shift'];
    $year = $_POST['year'];
    $_SESSION['name'] = $name;
    $_SESSION['username'] = $username;
    $_SESSION['phone'] = $phone;
    $_SESSION['address'] = $address;
    $_SESSION['stream'] = $stream;
    $_SESSION['shift'] = $shift;
    $_SESSION['year'] = $year;
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $password = password_hash($password, PASSWORD_BCRYPT);
    $authdata = "INSERT INTO `users` (`email`, `username`, `password`) VALUES ('$email', '$username', '$password')";
    $sql = "INSERT INTO `userdetails` (`username`,`name`, `phone`, `address`, `stream`, `shift`, `year`) VALUES ('$username','$name', '$phone', '$address', '$stream', '$shift', '$year')";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $authdata);
    if($result){
        echo "<script>alert('The record was inserted successfully')</script>";
        header("Location: profile.php");
        
        
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
}
// $name = $_SESSION['name'];
// $username = $_SESSION['username'];
// $phone = $_SESSION['phone'];
// $address = $_SESSION['address'];
// $stream = $_SESSION['stream'];
// $shift = $_SESSION['shift'];
// $year = $_SESSION['year'];


?>