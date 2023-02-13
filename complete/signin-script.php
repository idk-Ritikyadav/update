<?php 






if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $hash = $user['password'];
        if (password_verify($password, $hash)) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: profile.php");
        } else {
            echo "Incorrect username or password";
        }
    } else {
        echo "Incorrect username or password";
    }
}





?>


